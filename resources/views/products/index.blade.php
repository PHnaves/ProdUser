<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">
    <title>Produtos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/nav.js'])
</head>
<body>
    @include('layouts.nav')

    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
          <div class="flex justify-between">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Produtos Disponiveis</h2>
              <a href="{{ route('products.create') }}">
                <button class="py-2 px-6 rounded-lg bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 cursor-pointer">
                  Criar Novo Produto
                </button>
              </a>
          </div>
          <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
              @foreach ($products as $product)
                <div class="group relative">
                  <img src="{{ $product->image }}" class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:w-60 lg:h-80">
                  <div class="mt-4 flex justify-between">
                    <div>
                      <h3 class="text-sm text-gray-700">
                        <a href="{{ route('products.show', ['product' => $product->id]) }}">
                          <span aria-hidden="true" class="absolute inset-0"></span>
                          {{ $product->name }}
                        </a>
                      </h3>
                      <p class="mt-1 text-sm text-gray-500">{{ $product->description }}</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">R${{ number_format($product->price , 2, ',', '.')}} </p>
                  </div>
                </div>            
              @endforeach
          </div>
        </div>
    </div>
      
    
</body>
</html>