<?php

namespace App\Livewire\Mentor;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MyProfile extends Component
{
    public $name;
    public $surname;
    public $phone;
    public $sex;

    public function render()
    {
        return view('livewire.mentor.my-profile');
    }

    public function mount() {
        $user = Auth::user();
        $this->name = $user->name;
        $this->surname = $user->surname;
        $this->phone = $user->phone;
        $this->sex = $user->sex;
    }

    public function createProfile() {

        /** @var \App\Models\User $user */
        $user = Auth::user();
        $user->name = $this->name;
        $user->surname = $this->surname;
        $user->phone = $this->phone;
        $user->sex = $this->sex;
        $user->save();

        // User::updated([
        //     'name' => $this->name,
        //     'surname' => $this->surname,
        //     'phone' => $this->phone,
        //     'sex' => $this->sex,
        // ]);

        return $this->redirectRoute('mentor-my-location', navigate: true);
    }
}
