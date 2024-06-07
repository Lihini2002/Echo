<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category; // Assuming you have a Category model

class CategoryList extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = Category::getTopLevelCategories();
    }

    
  

    public function render()
    {
        return view('livewire.category-list', [
            'categories' => $this->categories,
        ]);
    }
}
