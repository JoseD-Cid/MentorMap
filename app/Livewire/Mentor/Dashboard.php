<?php

namespace App\Livewire\Mentor;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Dashboard extends Component
{
    #[Layout('components.layouts.mentor')]
    public function render()
    {
        return view('livewire.mentor.dashboard');
    }
}
