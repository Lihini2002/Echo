<?php

namespace App\Livewire;
use App\Models\Product;
use App\Models\Cart;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;


class AddtoCart extends Component
{
    public $product;
    public $quantity = 1;
    public $cart;

    //this should prolly be called in the products.show page. 

    public function mount($productId)

    {
        //when you click the product we can give the product id
        $this->product = Product::find($productId);
        $this->getCart();
        //  $this->push('scripts', asset('js/my-cart-script.js'));
        // $this->dispatchBrowserEvent('cart-updated');
        // $this->push('scripts', asset('js/my-alert-script.js'));
    } 


    public function decrement()
    {
        $this->quantity = max(1, --$this->quantity); // Decrement and limit to minimum 1
    }

    public function increment()
    {

        //implement this along with stocks later 
        //since 
        //  $stock = $this->product->stock->first();
        $this->quantity = min($this->product->stock, ++$this->quantity); // Increment and limit to stock
    }


    //we use this function to get the cart 
    private function getCart()
    {

        //find the cart and get the user id of the auth user. 
        //find the cart where its not paid 
        //so this means as long as it is not paid its the cart that is being obtained. 
        $this->cart = Cart::where('user_id', auth()->id())
            ->where('is_paid', false)
            ->first();
    }



    public function addToCart()
    {
        $this->getCart();

        //if a cart doesnt exist already make new cart 
        if (!$this->cart) {
            $this->cart = Cart::create([
                'user_id' => auth()->id(),
                'is_paid' => false,
            ]);
        }

        //add it as a cart item 
            //assuming that you have already added this product item into the cart. 
        $cartItem = $this->cart->products()->where('product_id', $this->product->id)->first();

        //then edit the quantity
        if ($cartItem) {
            $cartItem->pivot->quantity = $this->quantity;
            $cartItem->pivot->save();
        } else {

            //if it doesnt exist add it as a new cart item 
            $this->cart->products()->attach($this->product->id, [
                'quantity' => $this->quantity,
                'tax' => 0,
                'discount' => 0,
                'price' => $this->product->price,
            ]);
        }

        //find the new total
        $this->cart->total = $this->cart->products->sum(function ($product) {
            return $product->pivot->price * $product->pivot->quantity;
        });
        

        
        $this->cart->save();
     
        $this->dispatch('cart-updated');
        session()->flash('success', ' item added successfully!');
        // $this->dispatchBrowserEvent('name-updated', ['newName' => $value]);
        // $this->dispatchBrowserEvent('showAlert', $message);
        $this->dispatch('cartRefresh');// Dispatch cart refresh event
    }


    public function render()
    {
        return view('livewire.addto-cart');
    }
}
