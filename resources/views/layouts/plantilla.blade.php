<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-50 text-blue-900 font-sans">

    <header class="bg-blue-800 text-white py-4 shadow-md">
        <div class="max-w-7xl mx-auto px-4">
            <h1 class="text-2xl font-bold">Donaciones Educativas - Celima</h1>
        </div>
    </header>

    <main class="max-w-4xl mx-auto py-8 px-4">
        @yield('contenido')
    </main>

    <footer class="bg-blue-800 text-white text-center py-4 mt-10">
        © 2025 Celima. Campañas de Apoyo Educativo.
    </footer>
</body>
</html>
