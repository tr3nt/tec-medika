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
 * Reglas del Validador de citas
 * 
 * @return array
 */
function getAppRules() : array
{
    return [
        'form.date' => 'required',
        'form.hour' => 'required|integer|between:0,23',
    ];
}

/**
 * Mensajes de Validator de pacientes en español
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

/**
 * Mensajes de Validator de citas en español
 * 
 * @return array
 */
function getAppMessages() : array
{
    return [
        'form.date.required' => 'Fecha obligatoria',
        'form.hour.required' => 'Hora obligatoria',
        'form.hour.between' => 'Hora entre 0 y 23',
    ];
}

/**
 * Convierte una fecha MySQL al español
 * 
 * @param string|null $date
 * @return string
 */
function getSpanishDate(string|null $date) : string
{
    $format = "/^\d{4}-\d{2}-\d{2}$/";
    if (preg_match($format, $date)) {
        $monthNames = array(
            1 => 'ene',  2 => 'feb',  3 => 'mar',
            4 => 'abr',  5 => 'may',  6 => 'jun',
            7 => 'jul',  8 => 'ago',  9 => 'sep',
            10 => 'oct', 11 => 'nov', 12 => 'dic'
        );
        $arrDate = explode('-', $date);
        $day = $arrDate[2];
        $month = intval($arrDate[1]);
        $year = $arrDate[0];

        return "{$day}/{$monthNames[$month]}/{$year}";
    }
    return '';
}

/**
 * Obtener el nombre del mes en español
 * 
 * @return string
 */
function getMes(int $mes) : string
{
    return match($mes) {
        1 => 'Enero',
    };
}