<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    public function mount() {
        $this->email = "";
        $this->password = "";
    }

    public function login()
    {
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
            $this->emit('success', 'you are logged in');
            $this->redirect('/');
        }else{
            $this->emit('error', 'email and password are wrong.');
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
