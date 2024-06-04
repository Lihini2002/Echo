<div class=" py-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row -mx-4">
            <div class="md:flex-1 px-4">
                <div class="h-[460px] rounded-lg  mb-4">
                   {{-- Product image --}}
                    <img class="w-full h-full object-cover" src="https://cdn.pixabay.com/photo/2020/05/22/17/53/mockup-5206355_960_720.jpg" alt="Product Image">
                </div>
                <div class="flex -mx-2 mb-4">

                   
                </div>
            </div>
            <div class="md:flex-1 px-4">
                {{-- Product name --}}
                {{-- <h2 class="text-3xl font-bold text-gray-800  mb-2">{{$product->name}}</h2> --}}
                <h2 class="text-3xl font-bold text-[#0360B6]  mb-2">{{$product->name}}</h2>
              
                <p class="text-gray-600 font-bold text-md mb-4">
                    {{$product->brand->name}}
                </p>
                <div class="flex mb-4 my-10">
                    <div class="mr-4">

                        {{-- Price --}}
                        {{-- <span class="font-bold text-gray-700">Price:</span> --}}
                        <span class="text-gray-600 font-medium text-3xl">Rs.{{$product->price}}</span>
                    </div>
                    

{{--                  
                    <div>
                        <span class="font-bold text-gray-700">Availability:</span>
                        <span class="text-gray-600">In Stock</span>
                    </div> --}}
                </div>
              
                <div>
                    <p class="text-black my-2">Quantity</p>
                    @livewire('addto-cart', ['productId' => $product->id])
                   
                    {{-- <input class="mb-2 border-2 rounded w-[4em]" type="number" min="1" wire:model="quantity"> --}}
                </div>
                <div class="my-2">
                    {{-- Product Description --}}
                    <span class="font-bold text-gray-700 ">Description:</span>
                    <p class="text-gray-600 text-sm mt-2">
                        {{ Str::limit($product->description, 200) }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

