<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'middle_name',
        'last_name',
        'email',
        'password',
        'role',
        'active',
    ];
    protected $appends = [
        'full_name',
    ];

    /**
     * Obtener nombre completo
     * 
     * @return string
     */
    protected function fullName(): Attribute
    {
        return new Attribute(
            get: fn () => "{$this->name} {$this->middle_name} {$this->last_name}",
        );
    }

    /**
     * Obtener especialidades
     * 
     * @return BelongsToMany
     */
    public function specialities() : BelongsToMany
    {
        return $this->belongsToMany(Especialidad::class, 'user_speciality', 'users_id', 'specialities_id');
    }

    /**
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * @return HasMany
     */
    public function pacientes() : HasMany
    {
        return $this->hasMany(Paciente::class, 'patients_id');
    }
}
