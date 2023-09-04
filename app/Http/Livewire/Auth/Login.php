<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $user;

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function mount($with)
    {
        $this->user = User::find($with);
    }

    public function login()
    {
        Auth::login($this->user);
        $this->redirect('/');
    }
}
