<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    <title>Detalhes Usuario</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/nav.js'])
</head>
<body>

    @include('layouts.nav')
    
    <div class="py-15">
        <h3 class="text-2xl font-bold text-black  text-center mb-6">
            Detalhes do Usuario
        </h3>
        <div class="max-w-4xl mx-auto px-6">
            <div class="bg-white shadow-lg rounded-lg p-6">
                <div class="flex items-center gap-6">
                    <!-- Informações do produto -->
                    <div class="flex flex-col space-y-3">
                        <h2 class="text-2xl font-bold text-gray-800">Nome: {{ $user->name }}</h2>
                        <h2 class="text-2x1 font-bold text-gray-800">Email: {{ $user->email }}</h2>
                        <span class="text-2xl font-bold text-blue-600">Criado em: {{ $user->created_at }}</span>
                        <span class="text-2xl font-bold text-blue-600">Editado em: {{ $user->updated_at }}</span>

                        <!-- Formulário para deletar usuário -->
                        <form action=" {{ route('users.destroy', $user->id )}} " method="post" onsubmit="return confirm('Tem certeza que deseja excluir este usuario?');">
                            @csrf
                            @method('delete')
                            <button class="py-2 px-6 rounded-lg bg-red-600 px-4 py-2 text-sm font-semibold text-white shadow-md hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500" type="submit">Deletar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>