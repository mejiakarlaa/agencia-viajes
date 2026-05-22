<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DestinoController;
use App\Http\Controllers\HospedajeController;
use App\Http\Controllers\TransporteController;
use App\Http\Controllers\ViajeController;
use App\Http\Controllers\ReservacionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::resource('destinos', DestinoController::class);

    Route::resource('hospedajes', HospedajeController::class);

    Route::resource('transportes', TransporteController::class);

    Route::resource('viajes', ViajeController::class);

});

require __DIR__.'/auth.php';
