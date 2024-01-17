<?php

namespace App\Livewire;

use App\Models\Paciente;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Livewire\Component;

class PatientsEdit extends Component
{
    public string $titulo = 'Editar';
    public string $tituloBtn = 'Actualizar';
    public Paciente $paciente;
    public array $form;

    public function mount(Paciente $paciente)
    {
        $this->paciente = $paciente;
        $this->form = $paciente->toArray();
    }

    public function save() : Redirector
    {
        $this->validate(getRules());
        $this->paciente->update($this->form);
        setAlert("Paciente {$this->form['name']} actualizado correctamente.");

        return redirect(route('pacientes'));
    }

    // Mensajes de error en español
    public function messages() : array
    {
        return getMessages();
    }

    public function render() : View
    {
        return view('livewire.patients-form');
    }
}
