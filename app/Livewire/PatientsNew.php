<?php

namespace App\Livewire;

use App\Models\Paciente;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Livewire\Component;

class PatientsNew extends Component
{
    public string $titulo = 'Nuevo';
    public string $tituloBtn = 'Crear';
    public array $form;

    public function save() : Redirector
    {
        $this->validate(getRules());
        $this->form['users_id'] = auth()->user()->id;
        Paciente::create($this->form);
        setAlert('Paciente creado correctamente');

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
