<div class="">
  <div class="max-w-xs rounded-md border-gray-500 border-1 overflow-hidden shadow-md pb-4 bg-gray-100">
      @php
          $imageUrl = $brand->getFirstMediaUrl('brand_images');
      @endphp

      <div class="mx-auto px-3">
          @if($imageUrl)
              <img src="{{ $imageUrl }}" alt="Product Image" class="w-full h-48 object-fit rounded-full">
          @else
              <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Default Image" class="w-full h-48 object-cover rounded-t-lg">
          @endif
      </div>

      <div class="px-4 py-3">
          <div class="font-bold text-lg mb-1">{{$brand->name}}</div>
          <p class="text-gray-600 text-sm capitalize">
              {{$brand->subtitle}}
          </p>
          <p class="text-gray-700 text-sm">
              {{$brand->location}}
          </p>
      </div>

      <div class="px-4 pt-2 pb-3">
          @if ($brand->certifications)
              @foreach ($brand->certifications as $certification)
                  <span class="bg-gray-600 text-white text-xs font-medium mr-2 px-2 py-1 rounded-full">
                      {{ $certification->name }}
                  </span>
              @endforeach
              
          @endif
      </div>
  </div>
</div>
