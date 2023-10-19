<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cursos;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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

        // Ruta al archivo SQL
        $sqlFilePath = public_path('assets/database/instituciones.sql');

        // Verifica si el archivo existe
        if (File::exists($sqlFilePath)) {
            // Carga y ejecuta el contenido del archivo SQL
            $sqlContent = File::get($sqlFilePath);
            DB::unprepared($sqlContent);
        } else {
            // Maneja el caso en el que el archivo no existe
            echo "El archivo 'instituciones.sql' no se encontró.";
        }

        // ! USUARIOS
        // ! Solo ejecutar despues de 'INSTITUCIONES'
        User::factory()->create([
            'name' => 'Arhyel Ramos',
            'email' => 'arhyel.860@gmail.com',
            'rol' => 'Admin',
            'id_inst' => 1,
            'password' => Hash::make('123123'),
            'contra' => '123123'
        ]);

        User::factory()->create([
            'name' => 'Arhyel Pruebas 2',
            'email' => 'a@info.com',
            'rol' => 'Director',
            'id_inst' => 79,
            'password' => Hash::make('123123'),
            'contra' => '123123'
        ]);

        User::factory()->create([
            'name' => 'PEDRO AUGUSTO RAMOS BARRIOS',
            'email' => 'pramosb58@gmail.com',
            'rol' => 'Admin',
            'id_inst' => 3,
            'password' => Hash::make('123123'),
            'contra' => '123123'
        ]);

        User::factory()->create([
            'name' => 'EMILIO SANCHEZ ZEBALLOS',
            'email' => 'emilio@gmail.com',
            'rol' => 'Director',
            'id_inst' => 5,
            'password' => Hash::make('123123'),
            'contra' => '123123'
        ]);
    }
}
