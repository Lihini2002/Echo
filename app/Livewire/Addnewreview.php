<?php

namespace App\Livewire;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;


use Livewire\Component;

class Addnewreview extends Component
{
    public $product;
    public $rating;
    public $review;
    public $user_id;
    public $errorMessage;

    //user auto generated 
    //product auto passed 

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->rating = 0;
        $this->review = '';
        $this->user_id = auth()->id();
        
    }

    //if you are not logged in , it nas to create 

    public function submit()
    {
        $this->validate([
            'rating' => 'required|integer',
            'review' => 'required|string',
        ]);

        if (!$this->isUserApproved()) {
            $this->errorMessage = 'You need to be login to make a review.';
            //add a button here to login to the site. 
            return;
        }


        Review::create([
            'product_id' => $this->product->id,
            'rating' => $this->rating,
            'review' => $this->review,
            'user_id' => $this->user_id, // Assuming you have user authentication
        ]);

        session()->flash('success', 'Review created successfully!');

        // $this->save(); // Reset form fields after submission
        $this->reset(); // Reset form fields after submission
    }

    protected function isUserApproved()
    {
        // Implement your logic to check if the user is approved
        // For example, checking a field in the users table
        return $user = Auth::user();
        return $user ? $user->is_approved : true;
        // return Auth::user()->is_approved;
    }

    


    public function render()
    {
        return view('livewire.addnewreview');
    }
}
