<?php

namespace Database\Seeders;

use App\Models\Especialidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $especialidades = [
            'Nutriólogo',
            'Gastroenterólogo',
            'Odontólogo'
        ];

        foreach ($especialidades as $especialidad) {
            Especialidad::create([
                'speciality' => $especialidad
            ]);
        }
    }
}
