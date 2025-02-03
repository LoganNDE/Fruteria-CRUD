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
            <a href=" {{ route('index') }} ">
                <img src="https://static.vecteezy.com/system/resources/previews/019/782/664/non_2x/avocado-cartoon-character-free-png.png" class="h-15" alt="LOGO">
            </a>
            @if (auth()->check())
                <a class="btn btn-danger" href="{{ route('logout') }}">Cerrar sesión</a>
            @else
            <a class="btn btn-primary" href="{{ route('redirectLogin') }}">Iniciar sesión</a>
            @endif
        </div>
        
    </header>
    @yield('contenido')
    <footer class="w-full bg-gray-100 flex justify-center items-center">
        <p>Hecho por Logan Naranjo Rodriguez</p>
    </footer>
</body>
</html>