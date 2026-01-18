<?php

namespace App\Livewire\Mentor;

use App\Models\Discipline;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Topic;
use App\Models\Subject;
use Livewire\WithPagination;

class MyTopics extends Component
{
    use WithPagination;

    // Modal control
    public $showModal = false;

    // Variables for topic creation
    public $discipline_id;
    public $subject_id;
    public $subjects = [];
    public $topic_name;
    public $disciplines;
    public $selectedDiscipline = null;
    public $query = '';
    public $topicIdEdited;

    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->reset(['topicIdEdited', 'topic_name', 'subject_id', 'selectedDiscipline', 'subjects']);
        $this->showModal = false;
    }

    #[Layout('layouts.mentor')]
    public function render()
    {
        $mentorId = Auth::user()->mentor->id;

        $topics = Topic::with(['subject.discipline'])
            ->where('mentor_id', $mentorId)
            ->where('name', 'like', '%' . $this->query . '%')
            ->paginate(5);

        return view('livewire.mentor.my-topics', [
            'topics' => $topics
        ]);
    }

    public function mount()
    {
        $this->disciplines = Discipline::all();
    }

    public function updatedSelectedDiscipline($disciplineId)
    {
        $this->discipline_id = $disciplineId;

        if (!empty($disciplineId)) {
            $this->subjects = Subject::where('discipline_id', $disciplineId)->get();
        } else {
            $this->subjects = [];
        }
    }

    public function createTopic()
    {
        $this->validate([
            'topic_name' => 'required|string|max:155',
            'subject_id' => 'required|exists:subjects,id',
        ]);

        $mentorId = Auth::user()->mentor->id;
        Topic::create([
            'mentor_id' => $mentorId,
            'subject_id' => $this->subject_id,
            'name' => $this->topic_name,
        ]);

        session()->flash('message', 'Tema creado exitosamente.');
        $this->closeModal();
    }

    public function updatedQuery()
    {
        $this->resetPage();
    }

    public function deleteTopic($id)
    {
        $topic = Topic::findOrFail($id);
        $topic->delete();

        session()->flash('message', 'Tema eliminado exitosamente.');
    }

    public function editTopic($id)
    {
        $this->topicIdEdited = $id;
        $topic = Topic::findOrFail($id);
        $this->topic_name = $topic->name;
        $this->subject_id = $topic->subject->id;
        $this->selectedDiscipline = $topic->subject->discipline->id;
        $this->subjects = Subject::where('discipline_id', $this->selectedDiscipline)->get();

        $this->openModal();
    }

    public function updateTopic()
    {
        $this->validate([
            'topic_name' => 'required|string|max:155',
            'subject_id' => 'required|exists:subjects,id',
        ]);

        $topic = Topic::findOrFail($this->topicIdEdited);
        $topic->name = $this->topic_name;
        $topic->subject_id = $this->subject_id;
        $topic->save();

        session()->flash('message', 'Tema actualizado exitosamente.');
    }

    public function save()
    {
        if ($this->topicIdEdited) {
            $this->updateTopic();
        } else {
            $this->createTopic();
        }
        $this->closeModal();
    }
}
