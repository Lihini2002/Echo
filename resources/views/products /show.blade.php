
@php
use App\Models\Review;
@endphp
<x-app-layout>
    <div class="bg-white">
        {{-- Add relavant attributes that are needed --}}
       
        <livewire:product-details :product="$product" :quantity="$quantity"/>
        {{-- {{dd(Review::getReviews($product->id))}} --}}
        <div class="my-16">
            <p class="text-center text-2xl mb-10 font-bold text-[#314f76] ">Product Reviews</p>
          
            {{-- {{dd($product->id)}} --}}
            <livewire:addnewreview :product="$product"/>
            <livewire:reviews-list :product="$product"/>

        </div>
        {{-- @livewire('ProductAddToCart', ['product' => $product]) --}}
    </div> 
</x-app-layout>