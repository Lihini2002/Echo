@props(['certification'])

<div class="">
    <div class="max-w-xs rounded-md border-gray-500 border-1 overflow-hidden shadow-md pb-4 bg-gray-100">
        @php
            $imageUrl = $certification->getFirstMediaUrl('certification_images');
        @endphp
  
        <div class="mx-auto px-3">
            @if($imageUrl)
                <img src="{{ $imageUrl }}" alt="Certification Image" class="w-48 h-48 object-cover rounded-full">
            @else
                <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Default Image" class="w-48 h-48 object-cover rounded-full">
            @endif
        </div>
  
        <div class="px-4 py-3">
            <div class="font-bold text-lg mb-1">{{ $certification->name }}</div>
            <p class="text-gray-600 text-sm capitalize">
                {{-- {{ Str::limit($certification->description, 00) }} --}}
            </p>
            <p class="text-gray-700 text-sm">
                {{ $certification->subtitle }}
            </p>
        </div>
    </div>
</div>
