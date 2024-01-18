<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{
    public string $name = 'Visitante';

    public function mount()
    {
        // Obtener nombre del usuario logueado
        if (Auth::check())
            $this->name = auth()->user()->name;
    }
}
