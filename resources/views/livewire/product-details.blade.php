<div class="bg-gray-100 dark:bg-gray-800 py-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row -mx-4">
            <div class="md:flex-1 px-4">
                <div class="h-[460px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-4">
                   {{-- Product image --}}
                    <img class="w-full h-full object-cover" src="https://cdn.pixabay.com/photo/2020/05/22/17/53/mockup-5206355_960_720.jpg" alt="Product Image">
                </div>
                <div class="flex -mx-2 mb-4">

                    {{-- Add to Cart button --}}
                    <div class="w-1/2 px-2">
                        <button class="w-full bg-gray-900 dark:bg-gray-600 text-white py-2 px-4 rounded-full font-bold hover:bg-gray-800 dark:hover:bg-gray-700 wire:click="addToCart"">Add to Cart</button>
                    </div>

                    @livewire('addto-cart', ['productId' => $product->id])

                    {{-- Add to WishList button --}}
                    <div class="w-1/2 px-2">
                        <button class="w-full bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white py-2 px-4 rounded-full font-bold hover:bg-gray-300 dark:hover:bg-gray-600">Add to Wishlist</button>
                    </div>
                </div>
            </div>
            <div class="md:flex-1 px-4">
                {{-- Product name --}}
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">{{$product->name}}</h2>
              
                <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                    {{$product->brand->name}}
                </p>
                <div class="flex mb-4">
                    <div class="mr-4">

                        {{-- Price --}}
                        <span class="font-bold text-gray-700 dark:text-gray-300">Price:</span>
                        <span class="text-gray-600 dark:text-gray-300">Rs.{{$product->price}}</span>
                    </div>
                    
                 
                    <div>

                        {{-- Availability --}}
                        {{-- Make a function to calculate stock and availability later --}}
                        <span class="font-bold text-gray-700 dark:text-gray-300">Availability:</span>
                        <span class="text-gray-600 dark:text-gray-300">In Stock</span>
                    </div>
                </div>
              
                <div>
                    <p class="text-white">Quantity</p>
                    <input class="mb-2 border-2 rounded" type="number" min="1" wire:model="quantity">
                </div>
                <div>
                    {{-- Product Description --}}
                    <span class="font-bold text-gray-700 dark:text-gray-300">Product Description:</span>
                    <p class="text-gray-600 dark:text-gray-300 text-sm mt-2">
                        {{$product->description}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

