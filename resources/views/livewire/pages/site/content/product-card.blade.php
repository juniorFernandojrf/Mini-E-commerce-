<div class="bg-white border rounded-xl p-4 flex flex-col items-center shadow-sm hover:shadow-md transition">
    <div class="relative w-full">
        <img src="" alt=""
             class="w-full h-52 object-contain mb-3">
        @if ($sale)
            <span class="absolute top-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded"></span>
        @endif
        @if ($new)
            <span class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded">NEW</span>
        @endif
    </div>

    <div class="text-center">
        <p class="text-gray-400 text-sm"></p>
        <h3 class="text-lg font-semibold text-gray-800"></h3>
        <p class="text-gray-800 font-bold mt-1">
            @if ($oldPrice)
                <del class="text-gray-400 text-sm"></del>
            @endif
        </p>
    </div>

    <div class="flex justify-center gap-3 mt-3 text-gray-600">
        <button wire:click="addToWishlist" class="hover:text-red-500"><i class="fa fa-heart"></i></button>
        <button wire:click="compare" class="hover:text-blue-500"><i class="fa fa-exchange"></i></button>
        <button wire:click="quickView" class="hover:text-green-500"><i class="fa fa-eye"></i></button>
    </div>

    <button wire:click="addToCart"
            class="mt-4 w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition">
        <i class="fa fa-shopping-cart mr-1"></i> Add to cart
    </button>
</div>
