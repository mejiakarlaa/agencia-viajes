@extends('layouts.app')

@section('content')

<div class="flex justify-between items-center mb-10">

    <div>

        <h1 class="text-5xl font-extrabold text-gray-800">
            Destinos
        </h1>

        <p class="text-gray-500 mt-2">
            Explora lugares increíbles alrededor del mundo
        </p>

    </div>

    <a href="{{ route('destinos.create') }}"
       class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl shadow-lg transition">

        + Nuevo destino

    </a>

</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

@foreach($destinos as $destino)

<div class="bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300">

    <!-- IMAGEN -->
    <img src="{{ asset('storage/' . $destino->imagen) }}"
         class="w-full h-64 object-cover">

    <!-- CONTENIDO -->
    <div class="p-6">

        <div class="flex justify-between items-center mb-3">

            <h2 class="text-2xl font-bold text-gray-800">
                {{ $destino->nombre }}
            </h2>

            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm">
                {{ $destino->pais }}
            </span>

        </div>

        <p class="text-gray-600 mb-5">
            {{ $destino->descripcion }}
        </p>

        <div class="flex justify-between items-center">

            <div class="text-3xl font-extrabold text-blue-600">
                ${{ $destino->precio_base }}
            </div>

            <button class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-xl transition">
                Reservar
            </button>

        </div>

    </div>

</div>

@endforeach

</div>

@endsection
