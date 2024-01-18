<?php

namespace App\Livewire;

use App\Models\Cita;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Appointment extends Component
{
    public Collection $citas;
    public string $mesTxt;
    public string $mes;
    public int $year;
    public int $dias;
    public int $dia;

    public function mount()
    {
        // Obtener calendario actual
        $this->mesTxt = getMes(date('n'));
        $this->mes = date('m');
        $this->year = date('Y');
        $this->dia = date('d');
        $this->dias = cal_days_in_month(CAL_GREGORIAN, date('n'), date('Y'));

        // Obtener citas del día
        $this->search(now()->toDateString());
    }

    public function search(string $date) : void
    {
        $this->citas = Cita::with('paciente')
            ->whereUsersId(auth()->user()->id)
            ->where('date', $date)
            ->orderBy('hour')
            ->get();
    }
}
