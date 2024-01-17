<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public array $form = [];
    protected array $rules = [
        'form.email' => 'required|string|email|max:255',
        'form.password' => 'required|string|min:8'
    ];

    public function login()
    {
        $this->validate();
        if (Auth::attempt($this->form)) {
            return redirect(route('home'));
        }
        session()->flash('message', 'Bad Credentials');
    }
}
