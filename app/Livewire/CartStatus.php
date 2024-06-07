<?php

namespace App\Livewire;
use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CartStatus extends Component


{
    public $cart;
    public $showCart = true;
    // public $eachProductTotal; 
    

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

            public function eachProductTotal($product)
            {
            return $product->pivot->price * $product->pivot->quantity;
             
            }

    public function decrement(Product $product)
    {
        $product->pivot->quantity = max(1, --$product->quantity); // Decrement and limit to minimum 1
    }

    public function increment(Product $product)
    {

        //implement this along with stocks later 
        //since 
        //  $stock = $this->product->stock->first();
        $product->pivot->quantity = min($product->stock, ++$product->pivot->quantity); // Increment and limit to stock
    }


    public function refreshCart()
    {
        if (auth()->user()) {
            $this->cart = auth()->user()->carts()->where('is_paid', false)->first();
            $this->showCart = true;
        }
    }



    //checkout function 
    // public function checkout()
    // {
    //     // Send the cart data to the server to create the checkout session
    //     $response = Http::post(route('checkout.session'), $this->cart);

    //     // Redirect to the Stripe checkout session URL
    //     return redirect($response->header('Location'));
    // }

   
        // Send the cart data to the server to create the checkout session

        // public function checkout()
        // {
    
        //     $response = Http::post(route('checkout.session'), ['cart' => $this->cart]);
    
        //     return redirect($response->json()['url']);
        // }
    
    
        public function checkout()
        {
            // Trigger the checkout process by redirecting to the checkout route
            return redirect()->route('checkout');
        }


    public function render()
    {
        return view('livewire.cart-status');
    }
}
