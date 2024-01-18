<?php

namespace App\Livewire;

use App\Models\Cita;
use App\Models\Paciente;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class AppointmentNew extends Component
{
    public Collection $citas;
    public Paciente $paciente;
    public array $form;

    public function mount(Paciente $paciente)
    {
        $this->paciente = $paciente;
        // $this->date = now()->toDateString();
        $this->citas = Cita::whereUsersId(auth()->user()->id)
            ->wherePatientsId($paciente->id)
            ->get();
    }

    public function save() : void
    {
        $this->validate(getAppRules());
        $this->form['users_id'] = auth()->user()->id;
        $this->form['patients_id'] = $this->paciente->id;
        Cita::create($this->form);
    }

    // Mensajes de error en español
    public function messages() : array
    {
        return getAppMessages();
    }
}
