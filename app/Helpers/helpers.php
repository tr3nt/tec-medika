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