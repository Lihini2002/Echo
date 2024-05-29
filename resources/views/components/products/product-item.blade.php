
@props(['product'])
{{-- @props(['brand']) --}}
<div class="group relative">
    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md lg:aspect-none group-hover:opacity-75 lg:h-80">
      <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
    {{-- {{dd($product->getMedia('product_images')->first()->getUrl() )}} --}}
   
   
      {{-- <img src="{{ $product->getMedia('product_images')->first()->getUrl() }}">  --}}
    </div>
    <div class="mt-4 flex justify-between">
      <div>
        <h3 class="text-sm text-gray-600 font-bold">
          <a href="{{ route('products.show', $product->slug) }}">
            <span aria-hidden="true" class="absolute inset-0"></span>
             {{$product->name}}
          </a>
        </h3>
        <p class="mt-1 text-sm text-gray-500">{{$product->brand->name}}</p>
      </div>
      <p class="text-sm font-medium text-gray-900">Rs.{{$product->price}}</p>
    </div>
  </div>

  