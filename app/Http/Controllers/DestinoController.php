<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use Illuminate\Http\Request;

class DestinoController extends Controller
{
    public function index()
    {
        $destinos = Destino::all();

        return view('destinos.index', compact('destinos'));
    }

    public function create()
    {
        return view('destinos.create');
    }

   public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'pais' => 'required',
        'descripcion' => 'required',
        'precio_base' => 'required|numeric',
        'imagen' => 'required|image'
    ]);

    $rutaImagen = $request->file('imagen')
                          ->store('destinos', 'public');

    Destino::create([
        'nombre' => $request->nombre,
        'pais' => $request->pais,
        'descripcion' => $request->descripcion,
        'precio_base' => $request->precio_base,
        'imagen' => $rutaImagen
    ]);

    return redirect()->route('destinos.index');
}
}
