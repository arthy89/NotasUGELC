<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cursos;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // ? CURSOS
        Cursos::factory()->create([
            'curso_name' => 'MATEMÁTICA',
        ]);

        Cursos::factory()->create([
            'curso_name' => 'COMUNICACIÓN',
        ]);

        Cursos::factory()->create([
            'curso_name' => 'PERSONAL SOCIAL',
        ]);

        Cursos::factory()->create([
            'curso_name' => 'CIENCIA Y AMBIENTE',
        ]);

        // * INSTITUCIONES
        // * USAR ARCHIVO 'instituciones.sql'

        // ! USUARIOS
        // ! Solo ejecutar despues de 'INSTITUCIONES'
        User::factory()->create([
            'name' => 'Arhyel Ramos',
            'email' => 'arhyel.860@gmail.com',
            'rol' => 'Admin',
            'id_inst' => 0,
            'password' => Hash::make('123123'),
            'contra' => '123123'
        ]);

        User::factory()->create([
            'name' => 'Arhyel Pruebas 2',
            'email' => 'a@info.com',
            'rol' => 'Director',
            'id_inst' => 78,
            'password' => Hash::make('123123'),
            'contra' => '123123'
        ]);

        User::factory()->create([
            'name' => 'PEDRO AUGUSTO RAMOS BARRIOS',
            'email' => 'pramosb58@gmail.com',
            'rol' => 'Admin',
            'id_inst' => 2,
            'password' => Hash::make('123123'),
            'contra' => '123123'
        ]);

        User::factory()->create([
            'name' => 'EMILIO SANCHEZ ZEBALLOS',
            'email' => 'emilio@gmail.com',
            'rol' => 'Director',
            'id_inst' => 4,
            'password' => Hash::make('123123'),
            'contra' => '123123'
        ]);
    }
}
