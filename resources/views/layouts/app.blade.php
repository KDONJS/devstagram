<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Devstagram @yield('titulo')</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" >
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between">
                <h1 class="text-3xl font-black text-blue-600"> DevStagram</h1>

                <nav class="flex gap-2 items-center">
                    <a href="" class="font-bold uppercase text-gray-600">login</a>
                    <a href="{{ route('register') }}" class="font-bold uppercase text-gray-600">crear cuenta</a>
                </nav>
            </div>
        </header>
        <main class="container mx-auto mt-10">
            <h2 class=" font-black text-gray-600 text-center text-3xl mb-10 uppercase">
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>
        <footer class="text-center p-5 text-gray-500 font-semibold uppercase">
            DevStagram - todos los derechos reservados {{now()->year}}
        </footer>
    </body>
</html>
