<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;

    protected $table = 'specialities';

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'speciality',
    ];
}
