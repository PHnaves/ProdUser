<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    <title>Detalhes do Usuário</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/nav.js'])
</head>
<body class="bg-gray-100">
    @include('layouts.nav')
    
    {{-- informacoes do usuario --}}
    <div class="py-16 flex flex-col items-center">
        <h3 class="text-3xl font-bold text-gray-800 text-center mb-8">Detalhes do Usuário</h3>
        <div class="max-w-3xl w-full bg-white shadow-xl rounded-lg p-8 border border-gray-200">
            <div class="flex flex-col items-center gap-6">
                <div class="flex flex-col items-center text-center space-y-3">
                    <h2 class="text-2xl font-bold text-gray-900">Nome: <span class="text-blue-600">{{ $user->name }}</span></h2>
                    <h2 class="text-xl font-semibold text-gray-700">Email: <span class="text-gray-600">{{ $user->email }}</span></h2>
                    <span class="text-lg font-medium text-gray-500">Criado em: {{ $user->created_at }}</span>
                    {{-- logica para mostrar se o usuario foi editado ou não --}}
                    @if (is_null($user->updated_at) || $user->updated_at == $user->created_at)
                        <span class="text-lg font-medium text-gray-500">Este Usuário Ainda Não Foi Editado</span>
                    @else
                        <span class="text-lg font-medium text-gray-500">Editado em: {{ $user->updated_at }}</span>
                    @endif
                
                
                </div>

                <!-- Formulário para deletar usuário -->
                <form action="{{ route('users.destroy', $user->id )}}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?');">
                    @csrf
                    @method('delete')
                    <button class="py-3 px-8 rounded-lg bg-red-600 text-lg font-semibold text-white shadow-md hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 transition-all duration-300 cursor-pointer" type="submit">Excluir Usuário</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
