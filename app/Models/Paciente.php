<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paciente extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'patients';
    public $timestamps = false;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'users_id',
        'name',
        'middle_name',
        'last_name',
    ];

    /**
     * Obtener Nombre Completo
     * 
     * @return string
     */
    public function getFullNameAttribute() : string
    {
        return "{$this->name} {$this->middle_name} {$this->last_name}";
    }

    /**
     * Obtener el médico perteneciente a este paciente
     * 
     * @return Collection
     */
    public function medico() : BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
