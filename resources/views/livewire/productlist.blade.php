<?php

use App\Models\Product;
use App\Models\Brand;
use function Livewire\Volt\{state};
use Livewire\Volt\Component;

new class extends Component {
    public $products = [];


    public function mount()
{
    // Fetch posts from your data source (replace with your logic)
    // $this->products = Product::all(); // Assuming you have a Post model
    $this->products = Product::with('brand')->get();
}


//no need of the render function.
    
}

?>

<div>
    <div class=" mx-20 px-10 mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">  
      
        @foreach ($products as $product)
        {{-- 
        // Call the findBrand function to retrieve the brand object
        $brand = findBrand($product);
     --}} 
                   
                     <x-products.product-item wire:key="{{$product->id}}" :product="$product"/>
            @endforeach

        </div>
 </div>
