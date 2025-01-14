<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    // Campos permitidos para asignación masiva
    protected $fillable = ['nombre', 'email'];

    public function notas()
    {
        return $this->hasMany(Nota::class);
    }
}
