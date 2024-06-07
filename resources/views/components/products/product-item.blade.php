
@props(['product'])
{{-- @props(['brand']) --}}
<div class="group relative">
    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md lg:aspect-none group-hover:opacity-75 lg:h-80">
      @php
      $imageUrl = $product->getFirstMediaUrl('product_images');
     @endphp

      @if($imageUrl)
      <img src="{{ $imageUrl }}" alt="Product Image" class="w-[20em] h-[20em] aspect-w-1 aspect-h-1">
       @else
      <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Default Image">
      @endif
   
   
    </div>
    <div class="mt-4 flex justify-between">
      <div>
        <h3 class="text-sm text-gray-600 font-bold">
          <a href="{{ route('products.show', $product->slug) }}">
            <span aria-hidden="true" class="absolute inset-0"></span>
             {{$product->name}}
          </a>
        </h3>
      
        {{-- <p class="mt-1 text-sm text-gray-500">  {{$product->brand->name}}</p> --}}
   
      </div>
      <p class="text-sm font-medium text-gray-900">Rs.{{$product->price}}</p>
    </div>
  </div>

  