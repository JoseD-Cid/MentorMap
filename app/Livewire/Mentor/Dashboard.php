<?php

namespace App\Livewire\Mentor;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Discipline;
use App\Models\Subject;
use phpDocumentor\Reflection\Types\This;

class Dashboard extends Component
{
    public $disciplines;
    public $discipline_id = 2;
    public $subjects;
    public $subject_id;

    #[Layout('layouts.mentor')]
    public function render()
    {
        return view('livewire.mentor.dashboard');
    }

    public function mount() {
        $this->disciplines = Discipline::all();
        $this->subjects = Subject::where('discipline_id', $this->discipline_id)->get();
    }

    public function updatedDisciplineId($value) {
        $this->subjects = Subject::where('discipline_id', $value)->get();
    }
}
