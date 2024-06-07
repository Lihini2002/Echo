


<?php

use App\Models\Product;
use App\Models\Review;
use Livewire\WithPagination;
use function Livewire\Volt\{state};
use Livewire\Volt\Component;
// usesPagination();

new class extends Component {
   
    public $reviews = [];


    public function mount(Product $product)
{
    // Fetch posts from your data source (replace with your logic)
    // $this->products = Product::all(); // Assuming you have a Post model


    $this->reviews = Review::getReviews($product);
}


//no need of the render function.
    
}

?>

<div class="flex flex-col gap-10 justify-center items-center mx-10">
   
    {{-- <livewire:addnewreview :product="$product"/> --}}
    
    {{-- Success is as dangerous as failure. --}}
        {{-- {{dd(Review::getReviews($this->product))}} --}}
         @if ($reviews->isEmpty())
            <p>No reviews yet. Be the first to share!</p>
            @else

            @foreach ($reviews as $review)
                {{-- <div class="review">
                    <p>Rating: {{ $review->rating }}</p>
                    <p>Content: {{ $review->review }}</p>
                    {{-- <p>Content: {{ $review->review }}</p> --}}
                    {{-- <p>By: {{ $review->user->name }}</p> --}}

                    {{-- link it to a review item component --}}
                {{-- </div>  --}}

                <x-products.review-item wire:key="{{$review->id}}" :review="$review"/>

                
            @endforeach
        @endif
    
</div> 

{{-- <div>
    <div class=" mx-20 px-10 mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">  
      
        @foreach ($reviews as $review)
        {{-- 
        // Call the findBrand function to retrieve the brand object
        $brand = findBrand($product);
     --}} 
                   
                     {{-- <x-products.product-item wire:key="{{$product->id}}" :product="$product"/>
            @endforeach

        </div>
 </div> --}} 