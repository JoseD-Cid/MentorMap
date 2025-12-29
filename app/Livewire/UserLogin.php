<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserLogin extends Component
{
    public $email;
    public $password;
    public $reg;
    public $aviso;


    public function updatedPassword($valor) {
        if(strlen($valor) > 0 && strlen($valor) < 8) {
            $this->aviso = "La contraseña debe tener por lo menos 8 caracteres";
        } else {
            $this->aviso = "";
        }
    }

    public function render()
    {
        return view('livewire.user-login');
    }

    public function ingresar()
    {
        // $this->label = $this->label . " " . $this->input;
        // $this->input = "";
        $credentials = $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            /** @var \App\Models\User $user */
            $user = Auth::user();

            if ($user->hasRole('mentor')) {
                return $this->redirectRoute('mentor-dashboard');
            } elseif ($user->hasRole('student')) {
                return $this->redirectRoute('student-dashboard');
            }

        } else {

        }
    }

    public function checkAuth()
    {

        if (Auth::check()) {
            $this->reg = "Verificado";
        } else {
            $this->reg = "No verificado";
        }
    }

    public function updatedInput($live)
    {
        dump($live);
    }
}
