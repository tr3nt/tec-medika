<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class DoctorsEdit extends Component
{
    public User $medico;
    public array $form;

    public function mount(int $id)
    {
        $medico = User::with('specialities')->whereId($id)->first();
        $this->form = $medico->toArray();
        // Obtener las especialidades
        $this->form["specialities"] = array_column($this->form["specialities"], 'id');
    }
}
