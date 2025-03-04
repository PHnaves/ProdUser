<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    <title>Categorias</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/nav.js'])
</head>
<body>
    @include('layouts.nav')

    <ul role="list" class="space-y-4 p-4 bg-gray-900">
      <h2 class="text-2xl font-bold tracking-tight text-white text-center mt-10">Categorias Criadas</h2>
      {{-- listagem de todas as categorias criadas --}}
      @foreach ($categories as $category)
        <li class="flex justify-between items-center bg-white shadow-md rounded-lg p-4">
            <div class="flex items-center gap-4">
                <div>
                    <p class="text-lg font-semibold text-gray-900">{{ $category->name }}</p>
                    <p class="mt-1 text-sm text-gray-500">{{ $category->description }}</p>
                </div>
            </div>
            <div class="flex gap-3">
              {{-- link para ir para pagina de editar categoria --}}
                <a href="{{ route('categories.edit', $category->id) }}" class="px-3 py-1.5 text-sm font-medium text-white bg-blue-500 rounded-md hover:bg-blue-600 transition">
                    Editar
                </a>
                {{-- formulario para deletar categoria --}}
                <form action="{{ route('categories.destroy', $category->id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir esta categoria?');">
                    @csrf
                    @method('delete')
                    <button type="submit" class="px-3 py-1.5 text-sm font-medium text-white bg-red-500 rounded-md hover:bg-red-600 transition cursor-pointer">
                        Deletar
                    </button>
                </form>
            </div>
        </li>
      @endforeach
  </ul>
  
    <div class="relative isolate overflow-hidden bg-gray-900 py-16 sm:py-24 lg:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
            <div class="max-w-xl lg:max-w-lg">
              <h2 class="text-4xl font-semibold tracking-tight text-white">Criar Nova Categoria</h2>
              <p class="mt-4 text-lg text-gray-300">Crie Novas Categorias Para Relaciona-las Com Novos Produtos!</p>
              <div class="mt-3 flex flex-col gap-y-4 max-w-md">

                {{-- form para criar uma nova categoria --}}
                <form class="flex flex-col gap-4" action="{{ route('categories.store') }}" method="post">
                    @csrf
                    <label class="sr-only">Nome da Categoria</label>
                    <input name="name" type="text" autocomplete="name" required class="min-w-0 flex-auto rounded-md bg-white/5 px-3.5 py-2 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" placeholder="Nome">
                    <label class="sr-only">Descrição da Categoria</label>
                    <input name="description" type="text" autocomplete="description" required class="min-w-0 flex-auto rounded-md bg-white/5 px-3.5 py-2 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" placeholder="Descrição">
                    <button type="submit" class="flex-none rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 cursor-pointer">
                        Criar Nova Categoria
                    </button>
                </form>

              </div>
            </div>
            <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
              <div class="flex flex-col items-start">
                <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                  <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.05 4.575a1.575 1.575 0 1 0-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 0 1 3.15 0v1.5m-3.15 0 .075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 0 1 3.15 0V15M6.9 7.575a1.575 1.575 0 1 0-3.15 0v8.175a6.75 6.75 0 0 0 6.75 6.75h2.018a5.25 5.25 0 0 0 3.712-1.538l1.732-1.732a5.25 5.25 0 0 0 1.538-3.712l.003-2.024a.668.668 0 0 1 .198-.471 1.575 1.575 0 1 0-2.228-2.228 3.818 3.818 0 0 0-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0 1 16.35 15m.002 0h-.002" />
                  </svg>
                </div>
                <dt class="mt-4 text-base font-semibold text-white">Sem Limmites</dt>
                <dd class="mt-2 text-base/7 text-gray-400">Crie quantas Categorias Voce quiser! O limite é a sua imaginação</dd>
              </div>
            </dl>
          </div>
        </div>
        <div class="absolute top-0 left-1/2 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
          <div class="aspect-1155/678 w-[72.1875rem] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
      </div>
</body>
</html>
