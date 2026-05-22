@extends('layouts.app')

@section('content')

<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-lg">

    <h1 class="text-3xl font-bold mb-6">
        Crear Hospedaje
    </h1>

    <form method="POST"
          action="{{ route('hospedajes.store') }}">

        @csrf

        <div class="mb-4">

            <label class="block mb-2">
                Destino
            </label>

            <select name="destino_id"
                    class="w-full border rounded-lg p-3">

                @foreach($destinos as $destino)

                    <option value="{{ $destino->id }}">
                        {{ $destino->nombre }}
                    </option>

                @endforeach

            </select>

        </div>

        <div class="mb-4">

            <label class="block mb-2">
                Nombre
            </label>

            <input type="text"
                   name="nombre"
                   class="w-full border rounded-lg p-3">

        </div>

        <div class="mb-4">

            <label class="block mb-2">
                Categoría
            </label>

            <input type="text"
                   name="categoria"
                   class="w-full border rounded-lg p-3">

        </div>

        <div class="mb-4">

            <label class="block mb-2">
                Precio por noche
            </label>

            <input type="number"
                   step="0.01"
                   name="precio_noche"
                   class="w-full border rounded-lg p-3">

        </div>

        <div class="mb-6">

            <label class="block mb-2">
                Habitaciones disponibles
            </label>

            <input type="number"
                   name="habitaciones_disp"
                   class="w-full border rounded-lg p-3">

        </div>

        <button type="submit"
                class="bg-blue-600 text-white px-6 py-3 rounded-lg">

            Guardar

        </button>

    </form>

</div>

@endsection
