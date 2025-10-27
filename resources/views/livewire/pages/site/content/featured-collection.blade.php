<section class="py-10 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 py-10">
        <h3 class="text-2xl font-semibold text-gray-800"> {{ __('Your Favorite Accessories!') }} </h3>
    </div>
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-8">
        @foreach ([['img' => 'shop01.png', 'title' => 'Laptop Collection'], ['img' => 'shop03.png', 'title' => 'Accessories Collection'], ['img' => 'shop02.png', 'title' => 'Cameras Collection'], ['img' => 'shop02.png', 'title' => 'Cameras Collection']] as $shop)
            <div class="relative group rounded-xl overflow-hidden shadow hover:shadow-lg transition">
                <img src="" alt=""
                    class="w-full h-64 object-cover group-hover:scale-105 transition duration-500">
                <div class="absolute inset-0 bg-black/40 flex flex-col justify-center items-center text-white">
                    <h3 class="text-2xl font-bold text-center mb-2"></h3>
                    <a href="#"
                        class="bg-white text-gray-800 px-4 py-2 text-sm rounded-full hover:bg-gray-100 transition">
                        Shop now →
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</section>
