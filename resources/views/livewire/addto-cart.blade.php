
<div>
    {{-- Success is as dangerous as failure. --}}

    <div>
        <div class="flex justify-between items-center">
            <div class="flex items center">
                <button wire:click="decrement" class="px-4 py-2 bg-[#dee8f1] text-gray-700 font-semibold rounded">
                    -
                </button>
                <input type="text" class="px-4 py-2 w-20 bg-[#dee8f1] border-x-1 border-y-0 text-center" value="{{ $quantity }}">
                <button wire:click="increment" class="px-4 py-2 bg-[#dee8f1] text-gray-700 font-semibold rounded">
                    +
                </button>
            </div>
        </div>
        <div class="mt-5 ">
            <button  wire:click="addToCart" class="px-4 py-2 bg-[#ffce8e] text-gray-800 font-semibold rounded">
                Add to Cart

            </button>
        </div>
    
        <div class="my-10 inline-block"> 
        
        {{-- <p class="font-medium text-lg"> Total </p>  --}}
        {{-- <p class="font-medium text-lg"> {{ $cart?->total }} </p>  --}}
  
        <div class="mr-4">

            {{-- Price --}}
            <span class="font-bold text-gray-700 text-lg uppercase">Total: </span>
            <span class="text-gray-600">Rs.{{ $cart?->total }}</span>
        </div>

        </div>
    
    </div>
</div>


<script>
    window.addEventListener('cart-updated', event => {
        alert('New item added to the cart!');
    })
    
</script>