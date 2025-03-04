@csrf

{{-- nome --}}
<div>
    <label for="name" class="block text-gray-300 font-medium">Nome</label>
    <input type="text" value="{{ $user->name ?? old('name') }}" name="name" class="w-full px-4 py-2 rounded-md bg-gray-700 text-white border border-gray-600" required>
</div>

{{-- email --}}
<div>
    <label for="email" class="block text-gray-300 font-medium">Email</label>
    <input type="email" value="{{ $user->email ?? old('email') }}" name="email" class="w-full px-4 py-2 rounded-md bg-gray-700 text-white border border-gray-600" required>
</div>

{{-- senha --}}
<div>
    <label for="password" class="block text-gray-300 font-medium">Senha</label>
    <input type="password" name="password" class="w-full px-4 py-2 rounded-md bg-gray-700 text-white border border-gray-600 focus:ring-2 focus:ring-indigo-500" required>
</div>

{{-- botão para confirmação --}}
<div class="flex justify-end">
    <button type="submit" class="px-6 py-2 rounded-md bg-indigo-600 text-white hover:bg-indigo-700 transition cursor-pointer">Cadastrar</button>
</div>
