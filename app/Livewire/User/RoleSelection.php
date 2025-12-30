<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Mentor;
use Illuminate\Support\Facades\Auth;

class RoleSelection extends Component
{
    public function render()
    {
        return view('livewire.user.role-selection');
    }


    public function selectRole($role) {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        $user->assignRole($role);

        $mentor = new Mentor();
        $mentor->user_id = $user->id;
        $mentor->save();

        if ($role === 'mentor') {
            return $this->redirectRoute('mentor-my-profile');
        } elseif ($role === 'student') {
            return $this->redirectRoute('student-my-profile');
        }
    }


}
