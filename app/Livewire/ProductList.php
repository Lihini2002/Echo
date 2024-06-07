<?php

namespace App\Livewire; // Assuming Livewire components are in this namespace

use Livewire\Component;
use App\Models\Product; // Assuming you have a Product model
use App\Models\Brand; // Assuming you have a Brand model (if needed)

class ProductList extends Component
{
    public $products ;
    public $search = '';
    public $activeCategoryId;
    // public $category = ''; // Add category property if filtering by category

    public function mount()
    {
        
        // $this->activeCategoryId = $activeCategoryId;
        $this->fetchProducts();
        // $this->products = Product::query()
        //     ->where('name', 'like', '%' . $this->search . '%')
        //     ->orWhere('description', 'like', '%' . $this->search . '%')
        //     ->with('brand')
        //     ->get()
            ; // Fetch and paginate initial products
        // dd($products);
    }

    public function fetchProducts()
    {
        $query = Product::query();

        // Filter by active category ID
        if ($this->activeCategoryId) {
            $query->whereHas('categories', function ($query) {
                $query->where('id', $this->activeCategoryId);
            });
        }

        // Apply search filter
        if ($this->search) {
            $query->where(function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('description', 'like', '%' . $this->search . '%');
            });
        }

        // Eager load brand relationship
        $query->with('brand');

        // Get the products
        $this->products = $query->get();
    }

 

    public function performSearch()
    {
        // Fetch products from your data source based on the search query
        $this->products = Product::query()
            ->where('name', 'like', '%' . $this->search . '%')
            ->orWhere('description', 'like', '%' . $this->search . '%')
            ->get();
    }


    public function clearFilters()
    {
        $this->search = '';
        $this->category = ''; // Clear category filter if applicable
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.product-list', [
            'products' => $this->products,
        ]);
    }
}
