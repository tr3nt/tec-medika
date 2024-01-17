<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Paciente extends Model
{
    use HasFactory;

    public $table = 'patients';

    /**
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'middle_name',
        'last_name',
    ];

    /**
     * @return Collection
     */
    public function medico() : BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
