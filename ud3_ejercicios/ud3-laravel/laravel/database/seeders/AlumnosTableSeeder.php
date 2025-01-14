<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alumnos')->insert([
            ['nombre' => 'Juan Pérez', 'email' => 'juan.perez@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'María González', 'email' => 'maria.gonzalez@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Carlos López', 'email' => 'carlos.lopez@example.com', 'created_at' => now(), 'updated_at' => now()],
        ]);
        
    }
}
