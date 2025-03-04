<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    <title>Criar Novo Usuario</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/nav.js'])
</head>
<body>

    @include('layouts.nav')

    <div class="max-w-4xl mx-auto mt-10 bg-gray-800 p-6 rounded-lg shadow-md">
        <h2 class="text-white text-2xl font-semibold mb-4">Cadastrar Usuario</h2> 
        <!-- Formulário para criar novo usuário -->
        <form action="{{ route('users.store') }}" method="post" class="space-y-6">
            @include('users.components.form')
        </form>
    </div>
    
</body>
</html>