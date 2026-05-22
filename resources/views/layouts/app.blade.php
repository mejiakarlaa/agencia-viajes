<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Agencia de Viajes</title>
</head>

<body class="bg-gradient-to-br from-sky-100 via-white to-blue-100 min-h-screen">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-md border-b border-gray-200">
        
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <!-- LOGO -->
            <div class="flex items-center gap-3">

                <div class="bg-blue-600 text-white p-2 rounded-xl shadow">
                    ✈
                </div>

                <h1 class="text-2xl font-bold text-gray-800">
                    Agencia de Viajes
                </h1>

            </div>

            <!-- MENÚ -->
            <div class="flex gap-6 text-gray-700 font-medium">

                <a href="/dashboard"
                   class="hover:text-blue-600 transition duration-200">
                    Dashboard
                </a>

                <a href="/destinos"
                   class="hover:text-blue-600 transition duration-200">
                    Destinos
                </a>

                <a href="/hospedajes"
                   class="hover:text-blue-600 transition duration-200">
                    Hospedajes
                </a>

                <a href="/viajes"
                   class="hover:text-blue-600 transition duration-200">
                    Viajes
                </a>

            </div>

        </div>

    </nav>

    <!-- CONTENIDO -->
    <main class="max-w-7xl mx-auto px-6 py-10">

        @yield('content')

    </main>

</body>
</html>
