<?php

namespace App\Livewire\Mentor;

use App\Models\Discipline;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Topic;
use App\Models\Subject;

class MyTopics extends Component
{
    //Modal control
    public $showModal = false;

    // Variables for topic creation
    public $discipline_id;
    public $subject_id;
    public $subjects;
    public $topic_name;
    public $disciplines;
    public $selectedDiscipline = null;
    public $query = '';
    public $topics;

    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }


    #[Layout('layouts.mentor')]
    public function render()
    {
        return view('livewire.mentor.my-topics');
    }

    public function mount()
    {
        $this->disciplines = Discipline::all();
        $this->subjects = [];

        $mentorId  = Auth::user()->mentor->id;

        $this->topics = Topic::with(['subject.discipline'])
            ->where('mentor_id', $mentorId)
            ->get();
    }

    public function updatedSelectedDiscipline($disciplineId)
    {
        $this->discipline_id = $disciplineId;

        if(!empty($disciplineId))
        {
            $this->subjects = Subject::where('discipline_id', $disciplineId)->get();
        }
        else
        {
            $this->subjects = [];
        }
    }

    public function createTopic()
    {
        $this->validate([
            'topic_name' => 'required|string|max:155',
        ]);

        $mentorId  = Auth::user()->mentor->id;
        Topic::create([
            'mentor_id' => $mentorId,
            'subject_id' => $this->subject_id,
            'name' => $this->topic_name,
        ]);

        $this->closeModal();

    }




    public function updatedQuery()
    {
        $mentorId  = Auth::user()->mentor->id;
        $this->topics = Topic::with(['subject.discipline'])
            ->where('mentor_id', $mentorId)
            ->where('name', 'like', '%' . $this->query . '%')
            ->get();
    }

    public function deleteTopic()
    {

    }

    public function editTopic()
    {

    }



}
