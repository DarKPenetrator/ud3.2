<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    // Campos permitidos para asignación masiva
    protected $fillable = ['nombre', 'descripcion'];

    public function notas()
    {
        return $this->hasMany(Nota::class);
    }
}
