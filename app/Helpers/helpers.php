<?php

/**
 * Create Bootstrap alert messages
 * 
 * @param  string $message
 * @param  int    $type
 * @return void
 */
function setAlert(string $message, int $type = 0) : void
{
    $alertType = 'alert-primary';

    switch ($type)
    {
        case 1: $alertType = 'alert-success';
            break;
        case 2: $alertType = 'alert-warning';
    }

    $alert = <<<EOD
    <div class="alert alert-dismissible {$alertType} fade show mt-4" role="alert">
        <strong>Tec-Medika:</strong> {$message}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    EOD;

    session()->flash('message', $alert);
}

/**
 * Reglas del Validador de Pacientes
 * 
 * @return array
 */
function getRules() : array
{
    return [
        'form.name' => 'required|max:50',
        'form.middle_name' => 'required|max:50',
        'form.last_name' => 'required|max:50',
    ];
}

/**
 * Mensajes de Validator en español
 * 
 * @return array
 */
function getMessages() : array
{
    return [
        'form.name.required' => 'Nombre obligatorio',
        'form.middle_name.required' => 'Apellido paterno obligatorio',
        'form.last_name.required' => 'Apellido materno obligatorio',
    ];
}