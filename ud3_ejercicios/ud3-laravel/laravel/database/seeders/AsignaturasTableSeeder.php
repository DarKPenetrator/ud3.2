<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class AsignaturasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('asignaturas')->insert([
            ['nombre' => 'Matemáticas', 'descripcion' => 'Cálculo y álgebra', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Física', 'descripcion' => 'Mecánica y óptica', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Historia', 'descripcion' => 'Historia universal', 'created_at' => now(), 'updated_at' => now()],
        ]);
        
    }
}
