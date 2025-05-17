<?php

namespace App\Http\Controllers\Taller;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\User;


class CitaController extends Controller
{
public function index()
{
    $citas = Cita::paginate(10);
    return view('taller.citas.index', compact('citas'));
}

public  function create() {

    return view('taller.citas.create');
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
    $cita->fecha = $request->input('fecha');
    $cita->hora = $request->input('hora');
    $cita->duracion_estimada = $request->input('duracion_estimada');
    $cita->user_id = Auth::user()-> id;
    $cita->save();

    return redirect()->route('taller.citas.index')->with('success', 'Cita creada correctamente.');
}

public function show(Cita $cita)
{
    return view('taller.citas.show', compact('cita'));
}

public function edit(Cita $cita)
{
    return view('taller.citas.edit', compact('cita'));
}

public function update(Request $request, Cita $cita)
{
    $cita->update($request->only('fecha', 'hora', 'duracion_estimada'));

    return redirect()->route('taller.citas.index')->with('success', 'Cita actualizada.');
}

public function destroy(Cita $cita)
{
    $cita->delete();
    return back()->with('success', 'Cita eliminada.');
}

}
