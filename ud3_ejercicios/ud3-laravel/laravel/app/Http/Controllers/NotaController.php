<?php
namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    // Retorna todas las notas
    public function index()
    {
        return response()->json(Nota::all());
    }

    // Muestra una nota específica por su id
    public function show($id)
    {
        return response()->json(Nota::findOrFail($id));
    }

    // Crea una nueva nota
    public function store(Request $request)
    {
        return response()->json(Nota::create($request->all()));
    }

    // Actualiza una nota existente
    public function update(Request $request, $id)
    {
        $nota = Nota::findOrFail($id);
        $nota->update($request->all());
        return response()->json($nota);
    }

    // Elimina una nota
    public function destroy($id)
    {
        Nota::findOrFail($id)->delete();
        return response()->json(['message' => 'Nota eliminada']);
    }
}
