<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;


class ProductSearch extends Component
{
    public $query;
    public $products;

    public function mount()
    {
        $this->query = '';
        $this->products = [];
    }

    public function updatedQuery()
    {
        $this->products = Product::where('name', 'like', '%' . $this->query . '%')
            ->orWhere('description', 'like', '%' . $this->query . '%')
            ->orWhereHas('categories', function($q) {
                $q->where('name', 'like', '%' . $this->query . '%');
            })
            ->get();
    }

    public function render()
    {
        return view('livewire.product-search');
    }
}
