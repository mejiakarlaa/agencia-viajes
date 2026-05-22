@extends('layouts.app')

@section('content')

<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow-lg">

    <h1 class="text-3xl font-bold mb-6">
        Crear Destino
    </h1>

    <form method="POST"
          action="{{ route('destinos.store') }}"
          enctype="multipart/form-data">

        @csrf

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
                País
            </label>

            <input type="text"
                   name="pais"
                   class="w-full border rounded-lg p-3">

        </div>

        <div class="mb-4">

            <label class="block mb-2">
                Descripción
            </label>

            <textarea name="descripcion"
                      class="w-full border rounded-lg p-3"></textarea>

        </div>

        <div class="mb-4">

            <label class="block mb-2">
                Precio
            </label>

            <input type="number"
                   step="0.01"
                   name="precio_base"
                   class="w-full border rounded-lg p-3">

        </div>

        <div class="mb-6">

            <label class="block mb-2">
                Imagen
            </label>

            <input type="file"
                   name="imagen"
                   class="w-full border rounded-lg p-3">

        </div>

        <button type="submit"
                class="bg-blue-600 text-white px-6 py-3 rounded-lg">

            Guardar

        </button>

    </form>

</div>

@endsection
