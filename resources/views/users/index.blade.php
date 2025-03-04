<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    <title>Usuarios</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/nav.js'])
</head>
<body>

    @include('layouts.nav')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-col md:flex-row justify-between pb-10 space-y-4 md:space-y-0">
                        <h2 class="text-2xl font-bold tracking-tight text-white">Usuarios Criados</h2>
                        <a href="{{ route('users.create') }}">
                            <button class="py-2 px-6 rounded-lg bg-indigo-600 text-sm font-semibold text-white shadow-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 cursor-pointer">
                                Criar Novo Usuario
                            </button>
                        </a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse text-center">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th class="px-4 py-3 border-b text-gray-700 dark:text-gray-200">Nome</th>
                                    <th class="px-4 py-3 border-b text-gray-700 dark:text-gray-200">Email</th>
                                    <th class="px-4 py-3 border-b text-gray-700 dark:text-gray-200">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr class="border-b">
                                    <td class="px-4 py-3">{{ $user->name }}</td>
                                    <td class="px-4 py-3">{{ $user->email }}</td>
                                    <td class="px-4 py-3 flex flex-col sm:flex-row justify-center space-y-2 sm:space-y-0 sm:space-x-4">
                                        <a href="{{ route('users.edit', $user->id) }}" class="text-indigo-600 hover:underline">Editar</a>
                                        <a href="{{ route('users.show', $user->id) }}" class="text-green-600 hover:underline">Detalhes</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="pt-10">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
