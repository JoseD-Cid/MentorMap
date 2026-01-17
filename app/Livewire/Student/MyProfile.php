<?php

namespace App\Livewire\Student;

use Livewire\Attributes\Layout;
use Livewire\Component;

class MyProfile extends Component
{
    #[Layout('layouts.student')]
    public function render()
    {
        return view('livewire.student.my-profile');
    }
}
