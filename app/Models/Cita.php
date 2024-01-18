<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cita extends Model
{
    use HasFactory;

    protected $table = 'patient_appointment';

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'users_id',
        'patients_id',
        'date',
        'hour',
    ];

    public function medico() : BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function paciente() : BelongsTo
    {
        return $this->belongsTo(Paciente::class, 'patients_id');
    }
}
