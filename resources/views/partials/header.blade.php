<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <title>@yield('titulo')</title>
</head>
<body>
    <header class="w-full bg-gray-100 flex justify-center">
        <div class="w-4/6 flex justify-between items-center">
            <img src="" alt="LOGO">
            @if (auth()->check())
                <a class="px-4 h-8 flex items-center justify-center no-underline text-gray-50 text-lg rounded-md bg-slate-400" href="{{ route('logout') }}">Cerrar sesión</a>
            @else
            <a class="px-4 h-8 flex items-center justify-center text-lg rounded-md bg-slate-400" href="{{ route('redirectLogin') }}">Iniciar sesión</a>
            @endif
        </div>
        
    </header>
    @yield('contenido')
    <footer class="w-full bg-gray-100 flex justify-center items-center">
        <p>Hecho por Logan Naranjo Rodriguez</p>
    </footer>
</body>
</html>