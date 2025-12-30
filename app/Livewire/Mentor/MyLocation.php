<?php

namespace App\Livewire\Mentor;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MyLocation extends Component
{
    public $latitude_aprox;
    public $longitude_aprox;

    #[Layout('layouts.mentor')]
    public function render()
    {
        return view('livewire.mentor.my-location');
    }

    public function mount()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $mentor = $user->mentor;
        $this->latitude_aprox  = round((float) $mentor->latitude_aprox, 6);
        $this->longitude_aprox = round((float) $mentor->longitude_aprox, 6);
    }

    public function saveLocation()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $mentor = $user->mentor;
        $mentor->latitude_aprox = $this->latitude_aprox;
        $mentor->longitude_aprox = $this->longitude_aprox;
        $mentor->save();

        return $this->redirectRoute('mentor-dashboard', navigate: true);
    }
}
