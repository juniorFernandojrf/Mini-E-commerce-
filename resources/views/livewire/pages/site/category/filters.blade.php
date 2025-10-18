<div>
    <h2 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-200">Filtros</h2>

    <!-- Categorias -->
    <div class="mb-6">
        <h3 class="font-semibold mb-2 text-gray-700 dark:text-gray-300">Categorias</h3>
        @foreach($categories as $category)
            <label class="flex items-center space-x-2 text-sm text-gray-600 dark:text-gray-300">
                <input type="checkbox" wire:model="selectedCategories" value="{{ $category->id }}"
                    class="rounded text-indigo-600 focus:ring-indigo-500">
                <span>{{ $category->name }}</span>
            </label>
        @endforeach
    </div>

    <!-- Marcas -->
    <div class="mb-6">
        <h3 class="font-semibold mb-2 text-gray-700 dark:text-gray-300">Marcas</h3>
        @foreach($brands as $brand)
            <label class="flex items-center space-x-2 text-sm text-gray-600 dark:text-gray-300">
                <input type="checkbox" wire:model="selectedBrands" value="{{ $brand->id }}"
                    class="rounded text-indigo-600 focus:ring-indigo-500">
                <span>{{ $brand->name }}</span>
            </label>
        @endforeach
    </div>

    <!-- Preço -->
    <div>
        <h3 class="font-semibold mb-2 text-gray-700 dark:text-gray-300">Faixa de Preço</h3>
        <div class="flex items-center space-x-2">
            <input type="number" wire:model="minPrice" placeholder="Min"
                class="w-1/2 rounded-md border-gray-300 dark:bg-gray-700 dark:border-gray-600 text-sm p-1">
            <span class="text-gray-500">-</span>
            <input type="number" wire:model="maxPrice" placeholder="Max"
                class="w-1/2 rounded-md border-gray-300 dark:bg-gray-700 dark:border-gray-600 text-sm p-1">
        </div>
    </div>

    <button wire:click="resetFilters"
        class="mt-4 w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700 transition">
        Limpar filtros
    </button>
</div>
