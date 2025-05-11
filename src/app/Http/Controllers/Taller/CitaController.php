<?php

namespace App\Http\Controllers\Taller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cita;
use App\Models\User;


class CitaController extends Controller
{
    public function index()
{
    $citas = Cita::all();
    return view('taller.citas.index', compact('citas'));
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
