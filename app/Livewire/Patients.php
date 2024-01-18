<?php

namespace App\Livewire;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Patients extends Component
{
    public string $buscaTexto = '';
    public Collection $patients;

    public function search() : void
    {
        if ($this->buscaTexto == '')
            $this->patients = Paciente::whereUsersId(auth()->user()->id)->get();
        else
            $this->patients = Paciente::where('name', 'LIKE', '%'.$this->buscaTexto.'%')
                ->orWhere('middle_name', 'LIKE', '%'.$this->buscaTexto.'%')
                ->orWhere('last_name', 'LIKE', '%'.$this->buscaTexto.'%')
                ->get();
    }
}
