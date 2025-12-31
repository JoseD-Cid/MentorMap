<?php

namespace App\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    public function redirectLogin($isLogin) {
        $this->redirectRoute('login', ['isLogin' => $isLogin]);
    }

    public function render()
    {
        return view('livewire.welcome');
    }
}
