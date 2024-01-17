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
        if ($this->buscaTexto == '') {
            $this->getPatients();
        }
    }

    public function getPatients() : void
    {
        $this->patients = Paciente::all();
    }
}
