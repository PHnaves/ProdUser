@csrf

<div>
    <label for="name" class="block text-gray-300 font-medium mb-1">Nome da Categoria</label>
    <input type="text" value="{{ $category->name ?? old('name') }}" name="name" class="w-full px-4 py-2 rounded-md bg-gray-700 text-white focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 @error('name') border-red-500 @enderror" required>
    @error('name')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="description" class="block text-gray-300 font-medium mb-1">Descrição da Categoria</label>
    <input type="text" value="{{ $category->description ?? old('description') }}" name="description" class="w-full px-4 py-2 rounded-md bg-gray-700 text-white focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 @error('description') border-red-500 @enderror" required>
    @error('description')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="flex justify-end">
    <button type="submit" class="px-6 py-2 rounded-md bg-indigo-600 text-white hover:bg-indigo-700 transition cursor-pointer">
        {{ isset($category) ? 'Atualizar' : 'Cadastrar' }}
    </button>
</div> 