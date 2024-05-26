<?php

namespace App\Livewire;

use Livewire\Component;

class CategoryLink extends Component
{
    public $category;

    public function render()
    {
        return view('livewire.category-link');
    }
}
