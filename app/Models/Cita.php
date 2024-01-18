<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $table = 'patient_appointment';

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'date',
        'hour',
    ];
}
