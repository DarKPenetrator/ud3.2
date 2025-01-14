<?php
namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    // Retorna todos los alumnos
    public function index()
    {
        return response()->json(Alumno::all());
    }

    // Muestra un alumno específico por su id
    public function show($id)
    {
        return response()->json(Alumno::findOrFail($id));
    }

    // Crea un nuevo alumno
    public function store(Request $request)
    {
        return response()->json(Alumno::create($request->all()));
    }

    // Actualiza un alumno existente
    public function update(Request $request, $id)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->update($request->all());
        return response()->json($alumno);
    }

    // Elimina un alumno
    public function destroy($id)
    {
        Alumno::findOrFail($id)->delete();
        return response()->json(['message' => 'Alumno eliminado']);
    }
}
