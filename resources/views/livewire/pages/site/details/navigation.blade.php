<nav class="bg-white shadow-md fixed top-0 left-0 right-0 z-50">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-6 py-4">
        <!-- Logo -->
        <a href="/" class="text-2xl font-bold text-indigo-600">E-Shop</a>

        <!-- Menu Desktop -->
        <ul class="hidden md:flex space-x-8 text-gray-700 font-medium">
            <li><a href="#" class="hover:text-indigo-600 transition">Home</a></li>
            <li><a href="#" class="hover:text-indigo-600 transition">Categories</a></li>
            <li><a href="#" class="hover:text-indigo-600 transition">Hot Deals</a></li>
            <li><a href="#" class="hover:text-indigo-600 transition">Accessories</a></li>
            <li><a href="#" class="hover:text-indigo-600 transition">Laptops</a></li>
            <li><a href="#" class="hover:text-indigo-600 transition">Smartphones</a></li>
        </ul>

        <!-- Menu Mobile -->
        <div x-data="{ open: false }" class="md:hidden">
            <button @click="open = !open" class="focus:outline-none text-gray-700">
                <i class="fa fa-bars text-xl"></i>
            </button>
            <ul x-show="open" x-transition class="mt-3 space-y-2 text-gray-700 font-medium bg-gray-50 shadow-lg rounded-lg p-4 absolute right-6 top-16 w-48">
                <li><a href="#" class="block hover:text-indigo-600">Home</a></li>
                <li><a href="#" class="block hover:text-indigo-600">Categories</a></li>
                <li><a href="#" class="block hover:text-indigo-600">Accessories</a></li>
            </ul>
        </div>
    </div>
</nav>
