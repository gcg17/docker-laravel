<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cita;
use App\Models\User;

class CitaController extends Controller
{
    public function index()
{
    $citas = Auth::user() -> citas;
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
    
    #Crear una nueva instancia de la clase Cita
    $cita = new \App\Models\Cita();
    $cita->marca = $request->input('marca');
    $cita->modelo = $request->input('modelo');
    $cita->matricula = $request->input('matricula');
    $cita->user_id = Auth::user()-> id;
    $cita->save();

    return redirect()->route('cliente.citas.index')->with('success', 'Cita solicitada correctamente.');
}

}
