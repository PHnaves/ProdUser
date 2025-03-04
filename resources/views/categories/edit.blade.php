<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    <title>Editar Categoria</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/nav.js'])
</head>
<body>
    @include('layouts.nav')


    <div class="max-w-4xl mx-auto mt-10 bg-gray-800 p-6 rounded-lg shadow-md">
        <h2 class="text-white text-2xl font-semibold mb-4">Editar Categoria</h2> 
        <form action="{{ route('categories.update', $category->id)}}" method="post">
            @csrf
            @method('put')
            <div>
                <label for="name" class="block text-gray-300 font-medium">Nome da Categoria</label>
                <input type="text" value="{{ $category->name }}" name="name" class="w-full px-4 py-2 mb-5 rounded-md bg-gray-700 text-white border border-gray-600" required>
            </div>
            
            <div>
                <label for="name" class="block text-gray-300 font-medium">Descrição da Categoria</label>
                <input type="text" value="{{ $category->description }}" name="description" class="w-full px-4 py-2 mb-5 rounded-md bg-gray-700 text-white border border-gray-600" required>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="px-6 py-2 rounded-md bg-indigo-600 text-white hover:bg-indigo-700 transition">Confirmar</button>
            </div>
        </form>
    </div>
    
</body>
</html>