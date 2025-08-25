<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> {{-- para incluir tailwind dentro del proyecto --}}
</head>
<body>
    <div class="max-w-4xl mx-auto px-4">
        {{-- <h1>Bienvenido a la pagina principal</h1> --}}
        <x-alert type="info">
            <x-slot name="alertTitle"> {{-- para pasarle el nombre que quiero que cargue mi componente en la variable $alertTitle --}}
                Título de la alerta
            </x-slot>

            Contenido de la alerta
        </x-alert>
    </div>
</body>
</html>