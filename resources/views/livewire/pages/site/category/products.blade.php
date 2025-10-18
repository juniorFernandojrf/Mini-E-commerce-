<div>
    <!-- Filtros de ordenação -->
    <div class="flex justify-between items-center mb-6">
        <div class="text-gray-600 dark:text-gray-300">
            <strong>{{ $products->total() }}</strong> produtos encontrados
        </div>
        <select wire:model="sort"
            class="border-gray-300 dark:bg-gray-800 dark:border-gray-700 rounded-md text-sm focus:ring-indigo-500">
            <option value="latest">Mais recentes</option>
            <option value="price_asc">Menor preço</option>
            <option value="price_desc">Maior preço</option>
        </select>
    </div>

    <!-- GRID DE PRODUTOS -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($products as $product)
            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow hover:shadow-lg transition">
                <img src="{{ $product->image_url }}" alt="{{ $product->name }}"
                     class="w-full h-48 object-cover rounded-t-2xl">

                <div class="p-4">
                    <p class="text-xs uppercase text-gray-500 dark:text-gray-400">{{ $product->category->name }}</p>
                    <h3 class="font-semibold text-gray-800 dark:text-gray-200 text-sm truncate">{{ $product->name }}</h3>
                    <p class="text-indigo-600 font-bold mt-1">${{ number_format($product->price, 2) }}</p>

                    <div class="flex justify-between items-center mt-4">
                        <button class="text-indigo-600 text-sm hover:underline">Ver detalhes</button>
                        <button class="bg-indigo-600 text-white px-3 py-1 rounded-md text-sm hover:bg-indigo-700 transition">
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $products->links() }}
    </div>
</div>
