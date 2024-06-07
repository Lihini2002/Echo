<?php

namespace App\Livewire;
use App\Facades\CartFacade;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ProductDetails extends Component
{
    public $product;
    public $quantity;

    public function mount(): void
    {
        $this->quantity = 1;
    }


    public function render()
    {
        return view('livewire.product-details', [
            'product' => $this->product,
            'quantity' => $this->quantity,
        ]);
    }

    // public function addToCart(): void
    // {
    //     Cart::add($this->product->id, $this->product->name, $this->product->price, $this->quantity, $this->description);
    //     $this->emit('productAddedToCart');
    // }
}
