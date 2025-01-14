<?php
namespace App\Http\Controllers;

use App\Models\Asignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    // Retorna todas las asignaturas
    public function index()
    {
        return response()->json(Asignatura::all());
    }

    // Muestra una asignatura específica por su id
    public function show($id)
    {
        return response()->json(Asignatura::findOrFail($id));
    }

    // Crea una nueva asignatura
    public function store(Request $request)
    {
        return response()->json(Asignatura::create($request->all()));
    }

    // Actualiza una asignatura existente
    public function update(Request $request, $id)
    {
        $asignatura = Asignatura::findOrFail($id);
        $asignatura->update($request->all());
        return response()->json($asignatura);
    }

    // Elimina una asignatura
    public function destroy($id)
    {
        Asignatura::findOrFail($id)->delete();
        return response()->json(['message' => 'Asignatura eliminada']);
    }
}
