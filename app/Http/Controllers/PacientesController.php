<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PacientesController extends Controller
{
    public function view() : View
    {
        return view('components.layouts.appvue');
    }

    /** API */
    public function index() : JsonResponse
    {
        return response()->json(Paciente::all());
    }
    public function store(Request $request) : JsonResponse
    {
        $params = $request->toArray();
        Paciente::create($params);

        return response()->json(['message' => 'Paciente creado correctamente']);
    }
    public function update(Request $request, Paciente $paciente) : JsonResponse
    {
        $params = $request->toArray();
        $paciente->update($params);

        return response()->json(['message' => 'Paciente editado correctamente']);
    }
    public function destroy(Paciente $paciente) : JsonResponse
    {
        $paciente->delete();

        return response()->json(['message' => 'Paciente eliminado correctamente']);
    }
}
