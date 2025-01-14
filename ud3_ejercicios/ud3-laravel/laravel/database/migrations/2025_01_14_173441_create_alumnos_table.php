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
        if (!Schema::hasTable('alumnos')) {
            Schema::create('alumnos', function (Blueprint $table) {
                $table->id(); // PK
                $table->string('nombre');
                $table->string('email')->unique();
                $table->timestamps(); // created_at, updated_at
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('alumnos')) {
            Schema::dropIfExists('alumnos');
        }
    }
};
