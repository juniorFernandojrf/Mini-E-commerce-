<div class="pt-24 container mx-auto px-6">
    <!-- Filtros -->
    <div class="flex flex-col md:flex-row justify-between items-center mb-8 gap-4">
        <div>
            <select wire:model.live="selectedCategory" class="border-gray-300 rounded-md text-gray-700">
                <option value="">All Categories</option>
                {{-- @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach --}}
            </select>
        </div>

        <div>
            <select wire:model.live="priceRange" class="border-gray-300 rounded-md text-gray-700">
                <option value="">All Prices</option>
                <option value="0-100">0 - $100</option>
                <option value="100-500">$100 - $500</option>
                <option value="500-1000">$500 - $1000</option>
            </select>
        </div>

        <div>
            <input type="text" wire:model.live="brand" placeholder="Search brand..." class="border-gray-300 rounded-md px-3 py-2" />
        </div>
    </div>

    <!-- Produtos -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        {{-- @forelse ($products as $product) --}}
            <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition">
                <img src="#" alt="#" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">ola</h3>
                    <p class="text-sm text-gray-500 mb-2">ollllll</p>
                    <p class="text-indigo-600 font-bold">$20000</p>
                </div>
            </div>
        {{-- @empty
            <div class="col-span-full text-center text-gray-500">No products found.</div>
        @endforelse --}}
    </div>
</div>
