<?php

namespace App\Livewire;

use App\Models\Paciente;
use Illuminate\Routing\Redirector;
use Livewire\Component;

class PatientsNew extends Component
{
    public string $titulo = 'Nuevo';
    public string $tituloBtn = 'Crear';
    public array $form;
    protected array $rules = [
        'form.name' => 'required|max:50',
        'form.middle_name' => 'required|max:50',
        'form.last_name' => 'required|max:50',
    ];

    public function insert() : Redirector
    {
        $this->validate();
        $this->form['users_id'] = auth()->user()->id;
        Paciente::create($this->form);
        setAlert('Paciente creado correctamente');

        return redirect(route('pacientes'));
    }

    // Mensajes de error en español
    public function messages() : array
    {
        return [
            'form.name.required' => 'Nombre obligatorio',
            'form.middle_name.required' => 'Apellido paterno obligatorio',
            'form.last_name.required' => 'Apellido materno obligatorio',
        ];
    }
}
