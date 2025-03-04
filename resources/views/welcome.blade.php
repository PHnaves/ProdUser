<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    <title>Dashboard - ProdUser</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/nav.js'])
</head>
<body>
    @include('layouts.nav')

    <div class="relative isolate overflow-hidden py-24 sm:py-32">
        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" 
             alt="Imagem de fundo" 
             class="absolute inset-0 -z-10 w-full h-full object-cover object-right md:object-center">

        <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">
            <h1 class="text-5xl font-bold text-white tracking-tight sm:text-7xl">ProdUser</h1>
            <p class="mt-6 text-lg text-gray-300 sm:text-xl">Bem-vindo(a) à ProdUser! Sua aplicação web para criação e gerenciamento de usuários, produtos e categorias.</p>
            
            <div class="mt-10 flex flex-wrap justify-center gap-6 text-lg font-semibold">
                <a href="{{ route('users.create') }}" class="px-6 py-3 bg-blue-600 rounded-lg hover:bg-blue-700 transition">Criar Usuário →</a>
                <a href="{{ route('categories') }}" class="px-6 py-3 bg-green-600 rounded-lg hover:bg-green-700 transition">Criar Categoria →</a>
                <a href="{{ route('products.create') }}" class="px-6 py-3 bg-purple-600 rounded-lg hover:bg-purple-700 transition">Criar Produto →</a>
            </div>

            <div class="mt-16 sm:mt-20 max-w-2xl mx-auto bg-gray-900 p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-semibold text-white">Observação</h2>
                <p class="mt-2 text-gray-300">Para criar um novo produto, é necessário ter uma categoria cadastrada previamente.</p>
            </div>
        </div>
    </div>
</body>
</html>
