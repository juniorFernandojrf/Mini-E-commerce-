<!-- ========== HEADER ========== -->
<header x-data="{ searchOpen: false, cartOpen: false }"
    class="flex flex-wrap lg:justify-start lg:flex-nowrap z-50 w-full py-7 bg-gray-900 fixed top-0 left-0 z-50">
    <nav
        class="relative max-w-7xl w-full flex flex-wrap lg:grid lg:grid-cols-12 basis-full items-center px-4 md:px-6 lg:px-8 mx-auto">
        <div class="lg:col-span-3 flex items-center">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}"
                    class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-hidden focus:opacity-80">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="h-12 w-auto">
                </a>
            </div>
        </div>

        <!-- Button Group -->
        <div class="flex items-center gap-x-4 lg:gap-x-6 ms-auto py-1 lg:ps-6 lg:order-3 lg:col-span-3">
            <!-- Search toggle -->
            <button type="button" @click="searchOpen = true"
                class="size-6 relative flex justify-center items-center rounded-xl bg-white/10 border border-gray-700 text-white hover:bg-white/20 focus:outline-hidden focus:bg-white/20 disabled:opacity-50 disabled:pointer-events-none">
                <span class="sr-only">{{ __('Search') }}</span>
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m21 21-4.34-4.34" />
                    <circle cx="11" cy="11" r="8" />
                </svg>
            </button>

            <!-- Search Modal -->
            <div x-cloak x-show="searchOpen" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" class="fixed inset-0 z-50 overflow-y-auto" role="dialog"
                aria-modal="true">

                <!-- Background overlay -->
                <div class="fixed inset-0 bg-black bg-opacity-50" @click="searchOpen = false"></div>

                <!-- Modal panel -->
                <div class="relative min-h-screen flex items-center justify-center p-6">
                    <div class="relative bg-white w-full max-w-2xl rounded-xl shadow-lg p-4 "
                        @click.away="searchOpen = false">

                        <!-- Close button -->
                        <button @click="searchOpen = false"
                            class="absolute top-5 right-5 text-gray-500 hover:text-gray-700">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>

                        <!-- Search form -->
                        <form action="#" method="GET" class="mt-8">
                            <div class="flex items-center border-2 border-gray-200 rounded-lg overflow-hidden">
                                <input type="search" name="q" placeholder="Buscar produtos, categorias..."
                                    class="w-full px-4 py-3 text-gray-700 focus:outline-none"
                                    @keydown.escape="searchOpen = false" autofocus>
                                <button type="submit"
                                    class="px-6 py-3 bg-indigo-600 text-white font-medium hover:bg-indigo-700 focus:outline-none focus:bg-indigo-700">
                                    {{ __('Search') }}
                                </button>
                            </div>

                            <!-- Quick links -->
                            <div class="mt-4">
                                <h4 class="text-sm font-medium text-gray-500">{{ __('Popular searches') }}</h4>
                                <div class="mt-2 flex flex-wrap gap-2">
                                    <a href="#"
                                        class="px-3 py-1 text-sm bg-gray-100 text-gray-800 rounded-full hover:bg-gray-200">
                                        {{ __('Electronics') }}
                                    </a>
                                    <a href="#"
                                        class="px-3 py-1 text-sm bg-gray-100 text-gray-800 rounded-full hover:bg-gray-200">
                                        {{ __('Offers') }}
                                    </a>
                                    <a href="#"
                                        class="px-3 py-1 text-sm bg-gray-100 text-gray-800 rounded-full hover:bg-gray-200">
                                        {{ __('News') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Cart with dropdown -->
            <div class="relative" x-data="{ cartOpen: false }">
                <button type="button" @click="cartOpen = !cartOpen"
                    class="size-8 relative flex justify-center items-center rounded-xl bg-white/10 border border-gray-700 text-white hover:bg-white/20 focus:outline-hidden focus:bg-white/20 disabled:opacity-50 disabled:pointer-events-none">
                    <span class="sr-only">{{ __('Cart') }}</span>
                    <svg class="shrink-0 w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="8" cy="21" r="1" />
                        <circle cx="19" cy="21" r="1" />
                        <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12" />
                    </svg>
                </button>

                <!-- Dropdown Cart Modal -->
                <div x-cloak x-show="cartOpen" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                    @click.outside="cartOpen = false"
                    class="absolute right-0 mt-2 w-80 sm:w-96 bg-white shadow-xl border border-gray-200 rounded-xl z-50 max-h-[85vh] overflow-y-auto">

                    <!-- Header + Fechar -->
                    <div class="flex justify-between items-center border-b px-4 py-3">
                        <h3 class="text-lg font-semibold text-gray-800">{{ __('Your Cart') }}</h3>
                        <button @click="cartOpen = false" class="text-gray-400 hover:text-red-500 transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Cart Items -->
                    <div class="p-4 space-y-3">
                        <!-- Exemplo de produto -->
                        <div class="flex items-center justify-between border-b pb-3">
                            <div class="flex items-center space-x-3">
                                <img src="https://via.placeholder.com/80" alt="Produto"
                                    class="w-16 h-16 object-cover rounded-lg">
                                <div>
                                    <h3 class="text-sm font-semibold text-gray-800">Product Name</h3>
                                    <p class="text-gray-500 text-sm">$99.00</p>
                                </div>
                            </div>
                            <button class="text-gray-400 hover:text-red-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>

                        <!-- Caso esteja vazio -->
                        <p class="text-gray-500 text-center">{{ __('Your cart is empty') }}</p>
                    </div>

                    <!-- Footer -->
                    <div class="border-t border-gray-200 p-4">
                        <p class="text-sm text-gray-700 flex justify-between">
                            <span>{{ __('Subtotal:') }}</span>
                            <span class="font-semibold">$0.00</span>
                        </p>
                        <div class="mt-3 flex justify-between items-center">
                            <a href="#"
                                class="text-indigo-600 hover:underline text-sm font-medium">{{ __('View Cart') }}</a>
                            <a href="#"
                                class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition flex items-center space-x-1 text-sm">
                                <span>{{ __('Checkout') }}</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Sign in -->
            <a href="{{ route('login') }}"
                class="py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium text-nowrap rounded-xl border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-500 transition disabled:opacity-50 disabled:pointer-events-none">
                {{ __('get started') }}
            </a>
        </div>

        <!-- Mobile menu button -->
        <div class="lg:hidden ml-2">
            <button type="button"
                class="hs-collapse-toggle size-8 flex justify-center items-center text-sm font-semibold rounded-xl border border-gray-700 text-white hover:bg-white/10 focus:outline-hidden focus:bg-white/10"
                id="hs-pro-header" data-hs-collapse="#hs-pro-header-collapse">
                <svg class="hs-collapse-open:hidden w-8 h-8" width="16" height="16" fill="currentColor"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
                <svg class="hs-collapse-open:block hidden w-8 h-8" width="16" height="16" fill="currentColor"
                    viewBox="0 0 16 16">
                    <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </button>
        </div>

        <!-- Navigation menu -->
        <div id="hs-pro-header-collapse"
            class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow lg:block lg:w-auto lg:basis-auto lg:order-2 lg:col-span-6">
            <div
                class="flex flex-col gap-y-4 gap-x-0 mt-5 lg:flex-row lg:items-center lg:justify-center lg:gap-y-0 lg:gap-x-7 lg:mt-0">
                <a class="font-medium text-white" href="#" aria-current="page">{{ __('Home') }}</a>
                <a class="font-medium text-gray-400 hover:text-white" href="#">{{ __('products') }}</a>
                <a class="font-medium text-gray-400 hover:text-white" href="#">{{ __('Categories') }}</a>
                <a class="font-medium text-gray-400 hover:text-white" href="#">{{ __('Offers') }}</a>
                <a class="font-medium text-gray-400 hover:text-white" href="#">{{ __('Contact') }}</a>
            </div>
        </div>
    </nav>
</header>
<!-- ========== END HEADER ========== -->
