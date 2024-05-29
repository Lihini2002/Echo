<?php

namespace App\Livewire;
use App\Models\Brand;
use Livewire\Component;

class Brandlist extends Component
{
    public $brands;

    public function mount()
    {
        $this->brands = Brand::all(); // Fetch all brands
    }
    public function render()
    {
        return view('livewire.brandlist');
    }
}


//have to include a sorting algorithm here 
//have to make a way to sort thru categories and search criteria. 