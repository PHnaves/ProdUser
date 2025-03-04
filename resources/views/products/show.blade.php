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
<body class="bg-gray-100">
    @include('layouts.nav')

    <div class="py-12">
        <div class="max-w-4xl mx-auto px-6">
            <div class="bg-white shadow-lg rounded-lg p-8">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <!-- Imagem do produto -->
                    <img src="{{ $product->image }}" alt="Imagem do Produto" class="w-52 h-52 object-cover rounded-lg shadow-md border border-gray-300">
                    
                    <!-- Informações do produto -->
                    <div class="flex flex-col space-y-4 w-full">
                        <h2 class="text-3xl font-bold text-gray-800">{{ $product->name }}</h2>
                        <p class="text-lg text-gray-600">{{ $product->description }}</p>
                        <span class="text-2xl font-bold text-blue-600">R$ {{ number_format($product->price , 2, ',', '.')}} </span>
                        <div class="text-gray-500 text-sm">
                            <p>Postado em: {{ $product->created_at }}</p>
                            @if (is_null($product->updated_at) || $product->updated_at == $product->updated_at)
                                <p>Editado em: {{ $product->updated_at }}</p>
                            @else
                                <p>Produto Ainda Não Editado</p>
                            @endif
                        </div>
                        
                        <div class="flex justify-start space-x-6 mt-4">
                            <!-- Form de excluir Produto -->
                            <form action="{{ route('products.destroy', $product->id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este produto?');">
                                @csrf
                                @method('delete')
                                <button class="py-2 px-6 rounded-lg bg-red-600 text-white text-sm font-semibold shadow-md transition-all duration-300 hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500">
                                    Excluir Produto
                                </button>
                            </form>
                            
                            <!-- Botão Para ir Para Pagina de Editar Produto -->
                            <a href="{{ route('products.edit', $product->id) }}" class="py-2 px-6 rounded-lg bg-green-600 text-white text-sm font-semibold shadow-md transition-all duration-300 hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
                                Editar Produto
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
