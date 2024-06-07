<?php

namespace App\Livewire;
use App\Models\Brand;
use Livewire\Component;

class Brandcard extends Component
{
    public $brand;

    public function mount(Brand $brand) // Inject Brand object 
    {
        $this->brand = $brand;
    }

    public function render()
    {
        return view('livewire.brandcard');
    }
}
