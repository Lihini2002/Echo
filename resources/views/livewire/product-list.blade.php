{{-- @[products] --}}
<div>
    <div class="mx-20 px-10 mt-6">
        <input
            type="text"
            wire:model="search"
            wire:keydown.enter="performSearch"
            placeholder="Search products..."
            class="mb-6 p-2 border border-gray-300 rounded w-full"
        >
        {{-- @error('search')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror --}}
    </div>

    <div class="mx-20 px-10 mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        @foreach ($products as $product)
            <x-products.product-item wire:key="{{ $product->id }}" :product="$product" />
        @endforeach

        @if ($products->isEmpty())
            <div class="text-center text-gray-500 font-bold">No products found.</div>
        @endif
    </div>

   
</div>