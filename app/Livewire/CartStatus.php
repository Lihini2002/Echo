<?php

namespace App\Livewire;
use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;

class CartStatus extends Component


{
    public $cart;
    public $showCart = true;
    

    //from the carts under the users , get the first cart which is signed as unpaid. and make sure the user is auth
    public function mount()
    {
        if (auth()->user()) {
            $cart = auth()->user()->carts()->where('is_paid', false)->first();
            $this->cart = $cart;
        }
    }


    //removing products 
    public function removeProduct($productId)
    {
        if ($this->cart) {

            //take off the product from the cart 
            $this->cart->products()->detach($productId);

            //recalculating the cart total again 
            $this->cart->total = $this->cart->products->sum(function ($product) {
                return $product->pivot->price * $product->pivot->quantity;
            });

            //saving the cart and refreshing. 
            $this->cart->save();
            $this->cart->refresh(); // Refresh cart data after update
        }
    }

    public function refreshCart()
    {
        if (auth()->user()) {
            $this->cart = auth()->user()->carts()->where('is_paid', false)->first();
            $this->showCart = true;
        }
    }


    public function render()
    {
        return view('livewire.cart-status');
    }
}
