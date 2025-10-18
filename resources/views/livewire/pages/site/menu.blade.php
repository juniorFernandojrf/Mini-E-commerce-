<!-- resources/views/components/navigation.blade.php -->
<nav class="bg-white shadow" x-data="{ open: false }">
    <div class="container mx-auto px-4">
        <!-- MOBILE MENU TOGGLE -->
        <div class="flex items-center justify-between py-3 md:hidden">
            <a href="#" class="text-lg font-bold text-indigo-600">Menu</a>
            <button @click="open = !open" class="focus:outline-none">
                <i class="fa fa-bars text-2xl text-gray-700"></i>
            </button>
        </div>

        <!-- DESKTOP NAV -->
        <div class="hidden md:flex justify-center">
            <ul class="flex space-x-8 py-4 text-gray-700 font-medium">
                <li><a href="#" class="hover:text-indigo-600 active:text-indigo-700 transition">Home</a></li>
                <li><a href="#" class="hover:text-indigo-600 transition">Categories</a></li>
                <li><a href="#" class="hover:text-indigo-600 transition">Accessories</a></li>
            </ul>
        </div>

        <!-- MOBILE NAV -->
        <div x-show="open" x-transition class="md:hidden">
            <ul class="flex flex-col items-center space-y-3 py-4 text-gray-700 font-medium border-t border-gray-200">
                <li><a href="#" class="hover:text-indigo-600 transition">Home</a></li>
                <li><a href="#" class="hover:text-indigo-600 transition">Categories</a></li>
                <li><a href="#" class="hover:text-indigo-600 transition">Accessories</a></li>
            </ul>
        </div>
    </div>
</nav>
