<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('notas')) {
            Schema::create('notas', function (Blueprint $table) {
                $table->id(); // PK
                $table->foreignId('alumno_id')->constrained('alumnos')->onDelete('cascade'); // FK
                $table->foreignId('asignatura_id')->constrained('asignaturas')->onDelete('cascade'); // FK
                $table->decimal('nota', 5, 2); // Ejemplo: 9.50
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('notas')) {
            Schema::dropIfExists('notas');
        }
    }
};
