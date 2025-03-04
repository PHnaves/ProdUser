@csrf
      
        <div>
            <label for="name" class="block text-gray-300 font-medium mb-1">Nome do Produto</label>
            <input type="text" value="{{ $product->name ?? old('name') }}" name="name" class="w-full px-4 py-2 rounded-md bg-gray-700 text-white focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500" required>
        </div>
        
        <div>
            <label for="description" class="block text-gray-300 font-medium mb-1">Descrição</label>
            <textarea name="description" value="{{ $product->description ?? old('description') }}" class="w-full px-4 py-2 rounded-md bg-gray-700 text-white focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500" required></textarea>
        </div>
        
        <div>
            <label for="price" class="block text-gray-300 font-medium mb-1">Preço</label>
            <input type="number" value="{{ $product->price ?? old('price') }}" name="price" class="w-full px-4 py-2 rounded-md bg-gray-700 text-white focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500" required>
        </div>
        
        <div>
            <label for="category" class="block text-gray-300 font-medium mb-1">Categoria</label>
            <select id="category" name="id_category" class="w-full px-4 py-2 rounded-md bg-gray-700 text-white focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500" required>
                <option value="" disabled selected>Selecione uma categoria</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div>
            <label for="image" class="block text-gray-300 font-medium mb-1">URL da Imagem</label>
            <input type="text" value="{{ $product->image ?? old('image')}}" name="image" class="w-full px-4 py-2 rounded-md bg-gray-700 text-white focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500" required>
        </div>
        
        <div class="flex justify-end">
            <button type="submit" class="px-6 py-2 rounded-md bg-indigo-600 text-white hover:bg-indigo-700 transition cursor-pointer">Cadastrar</button>
        </div>
