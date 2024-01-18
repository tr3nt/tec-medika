<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Routing\Redirector;
use App\Models\Paciente;
use App\Models\Cita;

class AppointmentNew extends Component
{
    public Collection $citas;
    public Paciente $paciente;
    public array $form;

    public function mount(Paciente $paciente)
    {
        $this->paciente = $paciente;
        $this->citas = Cita::whereUsersId(auth()->user()->id)
            ->wherePatientsId($paciente->id)
            ->get();
    }

    public function save()
    {
        $this->validate(getAppRules());
        //$this->form['users_id'] = auth()->user()->id;
        //$this->form['patients_id'] = $this->paciente->id;

        $cita = Cita::firstOrNew([
            'users_id' => auth()->user()->id,
            'date' => $this->form['date'],
            'hour' => $this->form['hour'],
        ]);
        if (!$cita->exists) {
            $cita->patients_id = $this->paciente->id;
            $cita->save();
            //Cita::create($this->form);
            setAlert("Cita con {$this->paciente->name} creada correctamente");
            return redirect(route('pacientes'));
        }
        else {
            setAlert('Ese horario ya se encuentra ocupado', 2);
            return;
        }
    }

    // Mensajes de error en español
    public function messages() : array
    {
        return getAppMessages();
    }
}
