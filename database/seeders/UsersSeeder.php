<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuarios = [
            [
                'Sebastián', 'Aroca', 'N',
                'admin@gmail.com', '12345678',
                1, 0
            ],[
                'Cipriano', 'Cegarra', 'N',
                'user1@gmail.com', '12345678',
                2, 1
            ],[
                'Mihaela', 'Osorio', 'N',
                'user2@gmail.com', '12345678',
                2, 2
            ],[
                'Elvira', 'Peinado', 'N',
                'user3@gmail.com', '12345678',
                2, 3
            ],
        ];

        foreach($usuarios as $usuario) {
            $user = User::create([
                'name' => $usuario[0],
                'middle_name' => $usuario[1],
                'last_name' => $usuario[2],
                'email' => $usuario[3],
                'password' => bcrypt($usuario[4]),
                'role' => $usuario[5],
            ]);
            if ($usuario[5] !== 1)
                DB::table('user_speciality')->insert([
                    'users_id' => $user->id,
                    'specialities_id' => $usuario[6],
                ]);
        }
    }
}
