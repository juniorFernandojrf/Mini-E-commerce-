<section class="pt-[110px] bg-gray-50 ">
    <div class="mx-auto max-w-screen-xl space-y-8 px-4 py-4 sm:px-6 lg:space-y-16 lg:px-8">
        <livewire:pages.site.bread-crumbs />
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            <!-- Left: Product Images -->
            <div class="col-span-1">
                <div class="flex flex-col items-center space-y-4">
                    <div class="w-full border rounded-lg overflow-hidden">
                        <img src="{{ asset('/assets/img/product03.png') }}" alt=""
                            class="object-cover w-full h-80">
                    </div>
                </div>
            </div>

            <!-- Middle: Product Details -->
            <div class="col-span-1 space-y-6">
                <h2 class="text-2xl font-bold text-gray-900">Product name goes here</h2>

                <div class="flex items-center space-x-2">
                    <div class="text-yellow-400 flex">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o text-gray-300"></i>
                    </div>
                    <a href="#" class="text-sm text-blue-600 hover:underline">10 Reviews | Add your review</a>
                </div>

                <div class="flex items-center space-x-3">
                    <h3 class="text-3xl font-semibold text-blue-800">$980.00</h3>
                    <del class="text-gray-400">$990.00</del>
                    <span class="ml-auto text-green-600 text-sm">In Stock</span>
                </div>

                <p class="text-gray-600 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                </p>

                <!-- Quantity and Add to Cart -->
                <div class="flex items-center space-x-4">
                    <div>
                        <label class="text-sm font-medium text-gray-700">Qty</label>
                        <div class="flex items-center border rounded-md overflow-hidden w-28">
                            <button class="px-3 py-2 bg-gray-100 hover:bg-gray-200">-</button>
                            <input type="number" value="1"
                                class="w-full text-center border-0 focus:ring-0 focus:outline-none">
                            <button class="px-3 py-2 bg-gray-100 hover:bg-gray-200">+</button>
                        </div>
                    </div>

                    <button
                        class="flex items-center justify-center gap-2 px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                        <i class="fa fa-shopping-cart"></i> Add to cart
                    </button>
                </div>

                <!-- Categories -->
                <div class="text-sm text-gray-600 space-x-1">
                    <span class="font-medium text-gray-700">Category:</span>
                    <a href="#" class="hover:text-blue-600">Headphones</a>,
                    <a href="#" class="hover:text-blue-600">Accessories</a>
                </div>

                <!-- Share -->
                <div class="text-sm text-gray-600 flex items-center space-x-2">
                    <span class="font-medium text-gray-700">Share:</span>
                    <a href="#" class="hover:text-blue-600"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="hover:text-blue-600"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="hover:text-blue-600"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="hover:text-blue-600"><i class="fa fa-envelope"></i></a>
                </div>
            </div>

            <!-- Right: Tabs (Description, Details, Reviews) -->
            <div class="col-span-1 mt-10 lg:mt-0">
                <div>
                    <ul class="flex border-b text-sm font-medium text-gray-600">
                        <li class="mr-6"><a href="#tab1"
                                class="active-tab px-3 py-2 border-b-2 border-blue-600 text-blue-600">Description</a>
                        </li>
                        <li class="mr-6"><a href="#tab2" class="px-3 py-2 hover:text-blue-600">Details</a></li>
                        <li><a href="#tab3" class="px-3 py-2 hover:text-blue-600">Reviews (3)</a></li>
                    </ul>

                    <div id="tab1" class="py-4 text-gray-600 leading-relaxed">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="">
        Our Products Section
    </div>
</section>
