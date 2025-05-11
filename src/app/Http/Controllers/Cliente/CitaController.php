<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\User;

class CitaController extends Controller
{
    public function index()
{
    $citas = auth()->user()->citas;
    return view('cliente.citas.index', compact('citas'));
}

public function create()
{
    return view('cliente.citas.create');
}

public function store(Request $request)
{
    $request->validate([
        'marca' => 'required',
        'modelo' => 'required',
        'matricula' => 'required',
    ]);

    auth()->user()->citas()->create($request->only('marca', 'modelo', 'matricula'));

    return redirect()->route('cliente.citas.index')->with('success', 'Cita solicitada correctamente.');
}

}
