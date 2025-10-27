<a href="{{ route('product.details') }}" class="group relative block overflow-hidden">
    <button
        class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-blue-900 transition hover:text-blue-900/75">
        <span class="sr-only">Wishlist</span>

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="size-4" data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z">
            </path>
        </svg>
    </button>

    <img src="https://images.unsplash.com/photo-1628202926206-c63a34b1618f?q=80&amp;w=2574&amp;auto=format&amp;fit=crop"
        alt="" class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72">

    <div class="relative border border-blue-100 bg-white p-6">
        <p class="text-blue-700">
            $49.99
            <span class="text-blue-400 line-through">$80</span>
        </p>

        <h3 class="mt-1.5 text-lg font-medium text-blue-900">Wireless Headphones</h3>

        <p class="mt-1.5 line-clamp-3 text-blue-700">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nobis iure obcaecati
            pariatur. Officiis qui, enim cupiditate aliquam corporis iste.
        </p>

        <form class="mt-4">
            <button
                class="flex items-center justify-center w-full gap-2 rounded-sm bg-blue-600 text-white px-4 py-3 text-sm font-medium transition hover:scale-105 bg-blue-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
                <span>Add to Cart</span>
            </button>
        </form>
    </div>
</a>
