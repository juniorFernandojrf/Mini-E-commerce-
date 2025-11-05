<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between mb-6">
            <h3 class="text-2xl font-semibold text-gray-800">New Products</h3>
            <div class="flex gap-4 text-gray-500">
                <button wire:click="filter('laptops')" class="hover:text-indigo-600">Laptops</button>
                <button wire:click="filter('smartphones')" class="hover:text-indigo-600">Smartphones</button>
                <button wire:click="filter('cameras')" class="hover:text-indigo-600">Cameras</button>
                <button wire:click="filter('accessories')" class="hover:text-indigo-600">Accessories</button>
            </div>
        </div>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            {{-- Caso queira usar um card estático como placeholder, mantenha abaixo: --}}
            @livewire('pages.site.content.product-card')

            {{-- Se quiser listar dinamicamente, descomente e use o loop abaixo --}}
            {{-- @foreach ($products as $product)
                @livewire('pages.site.content.product-card', [
                    'image' => $product->image,
                    'name' => $product->name,
                    'category' => $product->category->name ?? '',
                    'price' => $product->price,
                    'oldPrice' => $product->old_price ?? null,
                    'sale' => $product->sale ?? null,
                    'new' => $product->is_new ?? null,
                ], key($product->id))
            @endforeach --}}
        </div>
    </div>
</section>
