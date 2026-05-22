<?php

namespace App\Http\Controllers;

use App\Models\Hospedaje;
use App\Models\Destino;
use Illuminate\Http\Request;

class HospedajeController extends Controller
{
    public function index()
    {
        $hospedajes = Hospedaje::with('destino')->get();

        return view('hospedajes.index', compact('hospedajes'));
    }

    public function create()
    {
        $destinos = Destino::all();

        return view('hospedajes.create', compact('destinos'));
    }

    public function store(Request $request)
    {
        Hospedaje::create($request->all());

        return redirect()->route('hospedajes.index');
    }

    public function show(Hospedaje $hospedaje)
    {
        //
    }

    public function edit(Hospedaje $hospedaje)
    {
        //
    }

    public function update(Request $request, Hospedaje $hospedaje)
    {
        //
    }

    public function destroy(Hospedaje $hospedaje) 
    {
        //
    }
}
