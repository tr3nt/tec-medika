<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Doctors extends Component
{
    public Collection $medicos;

    public function mount()
    {
        $this->medicos = User::with('specialities')->whereRole(2)->get();
    }

    public function getSpeciality(User $medico) : bool
    {
        return in_array(3, array_column($medico->specialities->toArray(), 'id'));
    }
}
