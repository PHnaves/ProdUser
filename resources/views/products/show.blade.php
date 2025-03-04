<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    <title>Produto Descrição</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/nav.js'])
</head>
<body>
    @include('layouts.nav')

    <div class="py-15">
        <div class="max-w-4xl mx-auto px-6">
            <div class="bg-white shadow-lg rounded-lg p-6">
                
                <div class="flex items-center gap-6">
                    <!-- Imagem do produto -->
                    <img src="{{ $product->image }}" alt="Imagem do Produto" class="w-40 h-40 object-cover rounded-lg shadow-md">

                    <!-- Informações do produto -->
                    <div class="flex flex-col space-y-3">
                        <h2 class="text-2xl font-bold text-gray-800">Nome: {{ $product->name }}</h2>
                        <h2 class="text-2x1 font-bold text-gray-800">Descrição: {{ $product->description }}</h2>
                        <span class="text-2xl font-bold text-blue-600">R$ {{ number_format($product->price , 2, ',', '.')}} </span>
                        <span class="text-2xl font-bold text-blue-600">Postado em: {{ $product->created_at }}</span>
                        <span class="text-2xl font-bold text-blue-600">Editado em: {{ $product->updated_at }}</span>
                        <div class="flex justify-between space-x-8">

                            {{-- form para deletar o produto --}}
                            <form action="{{ route('products.destroy', $product->id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este produto?');">
                                @csrf
                                @method('delete')
                                <button actio class="py-2 px-6 rounded-lg bg-red-600 px-4 py-2 text-sm font-semibold text-white shadow-md hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500">
                                    Excluir Produto
                                </button>
                            </form>
                            
                            {{-- form para ir para a pagina de editar o produto --}}
                            <a href="{{ route('products.edit', $product->id) }}">
                                <button class="py-2 px-6 rounded-lg bg-green-600 px-4 py-2 text-sm font-semibold text-white shadow-md hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                                    <a href="{{ route('products.edit', $product->id) }}">Editar Produto</a>
                                </button>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    
</body>
</html>