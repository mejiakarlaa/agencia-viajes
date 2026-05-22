<?php

namespace App\Http\Controllers;

use App\Models\Viaje;
use App\Models\Destino;
use App\Models\Hospedaje;
use App\Models\Transporte;
use Illuminate\Http\Request;

class ViajeController extends Controller
{
    public function index()
    {
        $viajes = Viaje::with(['destino', 'hospedaje', 'transporte'])->get();
        return view('viajes.index', compact('viajes'));
    }

    public function create()
    {
        $destinos    = Destino::where('activo', true)->get();
        $hospedajes  = Hospedaje::with('destino')->get();
        $transportes = Transporte::all();
        return view('viajes.create', compact('destinos', 'hospedajes', 'transportes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'destino_id'    => 'required|exists:destinos,id',
            'hospedaje_id'  => 'required|exists:hospedajes,id',
            'transporte_id' => 'required|exists:transportes,id',
            'nombre'        => 'required|string|max:255',
            'fecha_inicio'  => 'required|date',
            'fecha_fin'     => 'required|date|after:fecha_inicio',
            'precio_total'  => 'required|numeric|min:0',
            'capacidad'     => 'required|integer|min:1',
            'itinerario'    => 'nullable|string',
        ]);

        Viaje::create($request->all());

        return redirect()->route('viajes.index')
            ->with('success', 'Paquete de viaje creado correctamente.');
    }

    public function show(Viaje $viaje)
    {
        $viaje->load(['destino', 'hospedaje', 'transporte', 'reservaciones.user']);
        return view('viajes.show', compact('viaje'));
    }

    public function edit(Viaje $viaje)
    {
        $destinos    = Destino::where('activo', true)->get();
        $hospedajes  = Hospedaje::with('destino')->get();
        $transportes = Transporte::all();
        return view('viajes.edit', compact('viaje', 'destinos', 'hospedajes', 'transportes'));
    }

    public function update(Request $request, Viaje $viaje)
    {
        $request->validate([
            'destino_id'    => 'required|exists:destinos,id',
            'hospedaje_id'  => 'required|exists:hospedajes,id',
            'transporte_id' => 'required|exists:transportes,id',
            'nombre'        => 'required|string|max:255',
            'fecha_inicio'  => 'required|date',
            'fecha_fin'     => 'required|date|after:fecha_inicio',
            'precio_total'  => 'required|numeric|min:0',
            'capacidad'     => 'required|integer|min:1',
            'itinerario'    => 'nullable|string',
        ]);

        $viaje->update($request->all());

        return redirect()->route('viajes.index')
            ->with('success', 'Paquete de viaje actualizado correctamente.');
    }

    public function destroy(Viaje $viaje)
    {
        // Solo elimina si no tiene reservaciones activas
        $reservacionesActivas = $viaje->reservaciones()
            ->whereIn('estado', ['pendiente', 'confirmado'])
            ->count();

        if ($reservacionesActivas > 0) {
            return redirect()->route('viajes.index')
                ->with('error', 'No se puede eliminar: el paquete tiene reservaciones activas.');
        }

        $viaje->delete();

        return redirect()->route('viajes.index')
            ->with('success', 'Paquete de viaje eliminado.');
    }
}
