<?php

namespace App\Livewire\Mentor;

use Livewire\Attributes\Layout;
use Livewire\Component;


class MyTopics extends Component
{
    #[Layout('layouts.mentor')]
    public function render()
    {
        return view('livewire.mentor.my-topics');
    }
}
