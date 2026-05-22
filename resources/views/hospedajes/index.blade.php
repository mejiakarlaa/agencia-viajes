@extends('layouts.app')

@section('content')

<div class="flex justify-between mb-6">

    <h1 class="text-4xl font-bold">
        Hospedajes
    </h1>

    <a href="{{ route('hospedajes.create') }}"
       class="bg-blue-600 text-white px-5 py-2 rounded-lg">

        Nuevo hospedaje

    </a>

</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

@foreach($hospedajes as $hospedaje)

<div class="bg-white p-5 rounded-xl shadow-lg">

    <h2 class="text-2xl font-bold mb-2">
        {{ $hospedaje->nombre }}
    </h2>

    <p>
        Destino:
        {{ $hospedaje->destino->nombre }}
    </p>

    <p>
        Categoría:
        {{ $hospedaje->categoria }}
    </p>

    <p>
        Habitaciones:
        {{ $hospedaje->habitaciones_disp }}
    </p>

    <div class="text-blue-600 text-xl font-bold mt-4">

        ${{ $hospedaje->precio_noche }}

    </div>

</div>

@endforeach

</div>

@endsection