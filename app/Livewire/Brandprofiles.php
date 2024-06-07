<?php

namespace App\Livewire;

use Livewire\Component;

class Brandprofiles extends Component
{
    public $brand; 

    public function mount(Brand $brand) // Change parameter type to Brand
    {
        $this->brand = $brand;
    }

    public function render()
    {
        return view('livewire.brandprofiles');
    }

    //so we need to pass the specific brand and then get info about it 
    //in the brand list page : we can have another liveiwre file called brand profile list and then pass it there 
    //get the brand profi
}
