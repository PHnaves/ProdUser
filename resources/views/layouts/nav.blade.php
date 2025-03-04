<nav class="bg-gray-900 shadow-md">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <img class="h-16 w-16" src="{{ asset('prodUser-semFundo.png') }}" alt="ProdUser Logo">
            </div>

            <!-- Links do menu -->
            <div class="hidden sm:flex space-x-6">
                <a href="{{ route('home') }}" class="text-gray-300 hover:text-white hover:bg-gray-800 px-4 py-2 rounded-lg transition">Home</a>
                <a href="{{ route('users') }}" class="text-gray-300 hover:text-white hover:bg-gray-800 px-4 py-2 rounded-lg transition">Usuários</a>
                <a href="{{ route('products') }}" class="text-gray-300 hover:text-white hover:bg-gray-800 px-4 py-2 rounded-lg transition">Produtos</a>
                <a href="{{ route('categories') }}" class="text-gray-300 hover:text-white hover:bg-gray-800 px-4 py-2 rounded-lg transition">Categorias</a>
            </div>

            <!-- Botão de menu mobile -->
            <div class="sm:hidden">
                <button id="mobile-menu-btn" class="p-2 rounded-md text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none">
                    <svg class="size-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="hidden sm:hidden" id="mobile-menu">
        <div class="space-y-2 px-4 pb-4 pt-2 bg-gray-800">
            <a href="{{ route('home') }}" class="block text-white bg-gray-700 px-4 py-2 rounded-md">Home</a>
            <a href="{{ route('users') }}" class="block text-gray-300 hover:text-white hover:bg-gray-700 px-4 py-2 rounded-md">Usuários</a>
            <a href="{{ route('products') }}" class="block text-gray-300 hover:text-white hover:bg-gray-700 px-4 py-2 rounded-md">Produtos</a>
            <a href="{{ route('categories') }}" class="block text-gray-300 hover:text-white hover:bg-gray-700 px-4 py-2 rounded-md">Categorias</a>
        </div>
    </div>
</nav>

<script>
    document.getElementById("mobile-menu-btn").addEventListener("click", function() {
        document.getElementById("mobile-menu").classList.toggle("hidden");
    });
</script>
