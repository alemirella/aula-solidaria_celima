<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Solidaria - Celima</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">Aula Solidaria</h1>
            <div class="space-x-4">
                <a href="{{ route('campanas.index') }}" class="text-gray-700 hover:text-blue-600">Campañas</a>
                <a href="{{ route('donaciones.index') }}" class="text-gray-700 hover:text-blue-600">Donaciones</a>
                <a href="{{ route('proyectos.index') }}" class="text-gray-700 hover:text-blue-600">Proyectos</a>
                <a href="{{ url('transparencia') }}" class="text-gray-700 hover:text-blue-600">Transparencia</a>
                
                <!-- Si el usuario está autenticado, muestra estos enlaces -->
                @auth
                    <a href="{{ route('profile') }}" class="text-gray-700 hover:text-blue-600">Mi cuenta</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline-block">
                        @csrf
                        <button type="submit" class="text-gray-700 hover:text-blue-600">Cerrar sesión</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600">Iniciar Sesión</a>
                    <a href="{{ route('register') }}" class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Registrarse</a>
                @endauth
            </div>
        </div>
    </nav>
    

    <!-- HERO -->
    <section class="bg-blue-100 py-20">
        <div class="max-w-6xl mx-auto text-center px-4">
            <h2 class="text-4xl font-bold mb-4">Transforma la educación con tu ayuda</h2>
            <p class="text-lg mb-6">Dona para mejorar baños y pisos en escuelas públicas. Celima se encarga de la instalación.</p>
            <a href="{{ route('donaciones.index') }}" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Quiero Donar</a>
        </div>
    </section>

    <!-- PROBLEMÁTICA -->
    <section class="py-12 bg-white">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h3 class="text-2xl font-bold mb-4">¿Cuál es el problema?</h3>
            <p class="text-gray-700">
                Muchas escuelas públicas no cuentan con infraestructura básica como baños y pisos adecuados. Esto afecta el rendimiento y salud de los estudiantes. Nuestra plataforma conecta a donantes con estas escuelas, y Celima se encarga de instalar los materiales donados.
            </p>
        </div>
    </section>

    <!-- BOTONES DESTACADOS -->
    <section class="py-12 bg-gray-100">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 px-4 text-center">
            <div class="bg-white p-6 rounded shadow">
                <h4 class="font-bold text-lg mb-2">Campañas activas</h4>
                <p class="mb-4">Revisa las campañas de recaudación actuales.</p>
                <a href="{{ route('campanas.index') }}" class="text-blue-600 font-semibold hover:underline">Ver campañas</a>
            </div>
            <div class="bg-white p-6 rounded shadow">
                <h4 class="font-bold text-lg mb-2">Transparencia</h4>
                <p class="mb-4">Consulta cómo se utilizan las donaciones.</p>
                <a href="{{ url('transparencia') }}" class="text-blue-600 font-semibold hover:underline">Ver detalles</a>
            </div>
            <div class="bg-white p-6 rounded shadow">
                <h4 class="font-bold text-lg mb-2">Proyectos escolares</h4>
                <p class="mb-4">Descubre las mejoras realizadas gracias a tu ayuda.</p>
                <a href="{{ route('proyectos.index') }}" class="text-blue-600 font-semibold hover:underline">Ver proyectos</a>
            </div>
        </div>
    </section>

    <!-- TESTIMONIO -->
    <section class="py-12 bg-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <blockquote class="italic text-gray-600 text-lg">
                “Gracias a esta plataforma, nuestros alumnos ahora tienen baños dignos. Estamos profundamente agradecidos.”
            </blockquote>
            <p class="mt-2 text-blue-600 font-bold">– Directora de IE N° 12345</p>
        </div>
    </section>

    <!-- CELIMA -->
    <section class="py-12 bg-blue-50">
        <div class="max-w-5xl mx-auto px-4 text-center">
            <h3 class="text-xl font-bold mb-2">Impulsado por Celima</h3>
            <p class="text-gray-700">Celima contribuye con materiales de alta calidad e instalación profesional para garantizar un impacto real y duradero.</p>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-white py-6 mt-8 text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} Aula Solidaria - Celima. Todos los derechos reservados.
    </footer>

</body>
</html>
