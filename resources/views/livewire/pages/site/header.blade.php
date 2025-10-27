<header class="bg-white shadow" x-data="{ cartOpen: false, mobileMenuOpen: false }">
    <!-- MAIN HEADER -->
    <div class="container mx-auto flex justify-between items-center py-4 px-4">

        <!-- LOGO -->
        <div class="flex-shrink-0">
            <a href="/" class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12 w-auto">
            </a>
        </div>

        <!-- SEARCH BAR (centralizada e menor) -->
        <div class="flex-1 max-w-lg mx-auto">
            <form class="flex">
                <select
                    class="border border-gray-300 rounded-l px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm">
                    <option value="0">All Categories</option>
                    <option value="1">Category 01</option>
                    <option value="2">Category 02</option>
                </select>
                <input type="text" placeholder="Search..."
                    class="flex-1 border-t border-b border-gray-300 px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <button
                    class="bg-indigo-600 text-white px-4 py-2 rounded-r hover:bg-indigo-700 transition text-sm">Search</button>
            </form>
        </div>

        <!-- ACCOUNT / CART -->
        <div class="flex items-center space-x-4">
            @auth
                <!-- Cart Dropdown -->
                <div class="relative">
                    <button @click="cartOpen = !cartOpen" class="flex items-center space-x-1 focus:outline-none">
                        <i class="fa fa-shopping-cart text-xl"></i>
                        <span>Your Cart</span>
                        <span class="bg-red-600 text-white text-xs font-bold rounded-full px-1">
                            {{-- Exemplo: {{ $cartCount ?? 0 }} --}}
                        </span>
                    </button>

                    <div x-show="cartOpen" x-transition
                        class="absolute right-0 mt-2 w-80 bg-white shadow-lg border border-gray-200 rounded-lg z-50">
                        <div class="p-4 space-y-3">
                            {{-- @forelse($cartItems as $item) --}}
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <img src="" alt="" class="w-16 h-16 object-cover rounded">
                                    <div>
                                        <h3 class="text-sm font-semibold">Product Name</h3>
                                        <p class="text-gray-500 text-sm">$99.00</p>
                                    </div>
                                </div>
                                <button wire:click="removeItem({{ $item->id ?? 0 }})"
                                    class="text-gray-400 hover:text-red-600">
                                    <i class="fa fa-close"></i>
                                </button>
                            </div>
                            {{-- @empty --}}
                            {{-- <p class="text-gray-500 text-center">Your cart is empty.</p> --}}
                            {{-- @endforelse --}}
                        </div>

                        <div class="border-t border-gray-200 p-4">
                            <p class="text-sm text-gray-600">Subtotal: <span class="font-semibold">$0.00</span></p>
                            <div class="mt-2 flex justify-between">
                                <a href="{{ route('cart.index') }}" class="text-indigo-600 hover:underline">View Cart</a>
                                <a href="{{ route('checkout') }}"
                                    class="bg-indigo-600 text-white px-3 py-1 rounded hover:bg-indigo-700 transition flex items-center space-x-1">
                                    <span>Checkout</span>
                                    <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <!-- Login/Register Prompt -->
                <div class="flex items-center space-x-3">
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-indigo-600 font-medium">Login</a>
                    <span class="text-gray-400">|</span>
                    <a href="{{ route('register') }}"
                        class="bg-indigo-600 text-white px-3 py-1 rounded hover:bg-indigo-700 transition text-sm">
                        Sign Up
                    </a>
                </div>
            @endauth

            <!-- Mobile Menu Toggle -->
            <div class="md:hidden">
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                    class="flex items-center space-x-1 focus:outline-none">
                    <i class="fa fa-bars text-xl"></i>
                    <span>Menu</span>
                </button>
            </div>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div x-show="mobileMenuOpen" x-transition class="md:hidden bg-gray-100 border-t border-gray-200">
        <ul class="flex flex-col p-4 space-y-2">
            <li><a href="" class="block text-gray-700 hover:text-indigo-600">Home</a></li>
            <li><a href="#" class="block text-gray-700 hover:text-indigo-600">Shop</a></li>
            <li><a href="#" class="block text-gray-700 hover:text-indigo-600">Wishlist</a></li>
            @auth
                <li><a href="" class="block text-gray-700 hover:text-indigo-600">Cart</a></li>
                <li><a href="" class="block text-gray-700 hover:text-indigo-600">My Account</a></li>
            @else
                <li><a href="{{ route('login') }}" class="block text-gray-700 hover:text-indigo-600">Login</a></li>
                <li><a href="{{ route('register') }}" class="block text-gray-700 hover:text-indigo-600">Register</a></li>
            @endauth
        </ul>
    </div>
</header>
