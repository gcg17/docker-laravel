<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckRole;
use App\Http\Controllers\Cliente\CitaController as ClienteCitaController;
use App\Http\Controllers\Taller\CitaController as TallerCitaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

#Rutas para el cliente
Route::middleware(['auth', 'role:cliente'])
    ->prefix('cliente')
    ->name('cliente.')
    ->group(function () {
        Route::get('/citas', [ClienteCitaController::class, 'index'])->name('citas.index');
        Route::get('/citas/create', [ClienteCitaController::class, 'create'])->name('citas.create');
        Route::post('/citas', [ClienteCitaController::class, 'store'])->name('citas.store');
    });

#Rutas para el taller
Route::middleware(['auth', 'role:taller'])
    ->prefix('taller')
    ->name('taller.')
    ->group(function () {
        Route::get('/citas', [TallerCitaController::class, 'index'])->name('citas.index');
        Route::get('/citas/create', [TallerCitaController::class, 'create'])->name('citas.create');
        Route::post('/citas', [TallerCitaController::class, 'store'])->name('citas.store');
        Route::get('/citas/{cita}', [TallerCitaController::class, 'show'])->name('citas.show');
        Route::get('/citas/{cita}/edit', [TallerCitaController::class, 'edit'])->name('citas.edit');
        Route::put('/citas/{cita}', [TallerCitaController::class, 'update'])->name('citas.update');
        Route::delete('/citas/{cita}', [TallerCitaController::class, 'destroy'])->name('citas.destroy');
    });

require __DIR__.'/auth.php';