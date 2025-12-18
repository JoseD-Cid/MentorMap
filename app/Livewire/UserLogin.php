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
            $this->reg = "Usuario Verificado";
        } else {
            $this->reg = "Credenciales incorrectas";
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
