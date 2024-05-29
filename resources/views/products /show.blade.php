
<x-app-layout>
    <div>
        {{-- Add relavant attributes that are needed --}}
        <livewire:product-details :product="$product" :quantity="$quantity"/>
       
        {{-- @livewire('ProductAddToCart', ['product' => $product]) --}}
    </div> 
</x-app-layout>