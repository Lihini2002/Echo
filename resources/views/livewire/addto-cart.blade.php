<div>
    {{-- Success is as dangerous as failure. --}}

    <div>
        <div class="flex justify-between items-center bg-red-700">
            <div class="flex items center">
                <button wire:click="decrement" class="px-4 py-2 bg-gray-200 text-gray-700 font-semibold rounded">
                    -
                </button>
                <input type="text" class="px-4 py-2 w-20 bg-gray-200 text-center" value="{{ $quantity }}">
                <button wire:click="increment" class="px-4 py-2 bg-gray-200 text-gray-700 font-semibold rounded">
                    +
                </button>
            </div>
        </div>
        <div class="mt-5">
            <button wire:click="addToCart" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded">
                Add to Cart
            </button>
        </div>
    
        {{ $cart?->total }}
    </div>
</div>
