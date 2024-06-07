<?php

namespace App\Livewire;

use Livewire\Component;

class CategoryLink extends Component
{
    public $category;


      public function setActiveCategory($categoryId)
    {
        $this->activeCategory = Category::find($categoryId);
        // You can add additional logic here, such as fetching products based on the selected category
        // Example: $this->products = Product::where('category_id', $categoryId)->get();
    }

    public function render()
    {
        return view('livewire.category-link');
    }
}
