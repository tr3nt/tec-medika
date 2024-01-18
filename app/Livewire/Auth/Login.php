<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public array $form = [];
    protected array $rules = [
        'form.email' => 'required|string|email|max:50',
        'form.password' => 'required|string|min:8'
    ];

    public function login()
    {
        $this->validate();
        if (Auth::attempt($this->form)) {
            // Checar si el usuario está activo
            if (auth()->user()->active === 0) {
                Auth::logout();
                setAlert('Tu usuario ha sido desactivado', 2);
                return redirect(route('ingreso'));
            }
            return redirect(route('home'));
        }
        session()->flash('message', 'Usuario incorrecto');
    }

    // Mensajes de error en español
    public function messages() : array
    {
        return [
            'form.email.required' => 'Correo requerido',
            'form.email.email' => 'Correo inválido',
            'form.password.required' => 'Contraseña requerida',
            'form.password.min' => 'La contraseña no debe ser menor a 8 caracters',
        ];
    }
}
