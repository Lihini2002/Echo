<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use App\Models\Cart;
// use Stripe\PaymentIntent;
// use Illuminate\Http\Request;
// use Stripe\Stripe;
use Stripe\Charge;

class PaymentController extends Controller
{

    //so you create a checkout session 
    // public function createCheckoutSession(Request $request)
    // {
    //     // Pass the necessary data to the script
    //     //edit this with approproate data 
    //     $cartData = $request->all();

    //     $response = Http::post('http://localhost:4242/your-script.php', $cartData);

    //     return redirect($response->header('Location'));
    // }


    // public function createCheckoutSession(Request $request)
    // {
    //     Stripe::setApiKey(config('services.stripe.secret'));


    //     //i think this is supposed to be the request 
    //     $cart = $request->input('cart');
    //     $stripe = new StripeClient(config('services.stripe.secret'));
     
    //     $lineItems = [];

    //     //pass the actual array with the info 
    //         //so cart->products
    //     foreach ($cart->products as $product) {
    //         $price = $stripe->prices->create([
    //             'currency' => 'usd',
    //             'unit_amount' => $product->price * 100, // Stripe expects the amount in cents
    //             'product_data' => ['name' => $product->name],
    //         ]);
    //         $lineItems[] = [
    //             'price' => $price->id,
    //             'quantity' => $product->pivot->quantity,
    //         ];
    //     }

    //     $checkout_session = Session::create([
    //         'payment_method_types' => ['card'],
    //         'line_items' =>  $lineItems,
    //         'mode' => 'payment',
    //         'success_url' => route('checkout.success'),
    //         'cancel_url' => route('checkout.cancel'),
    //     ]);

    //     return response()->json(['url' => $checkout_session->url]);
    // }

    public function cancel()
    {
        return view('checkout.cancel');
    }
    public function checkout(Request $request)


    {
        
        // dd($request->all());
        $products = json_decode($request->input('products'));
        // $products[]= $request->input('products');

        // Set the API key
        $stripeSecretKey = config('services.stripe.secret');
        Stripe::setApiKey($stripeSecretKey);

        $stripe = new \Stripe\StripeClient($stripeSecretKey);
        $lineItems = [];
        $session ; 
        foreach ($products as $product) {
                    // dd($product);

                    // dd(is_array($product));
                    // var_dump($product);

                    // $priceGiven = $product['price'];
                    $priceStripe = $stripe->prices->create([
                        'currency' => 'lkr',
                        'unit_amount' => $product->pivot->price * 100,// Stripe expects the amount in cents
                        //nothing wrong with the unit amount , just the way to access the product                        
                        'product_data' => [
                            'name' => $product->name,
                        ],
                    ]);
                    $lineItems[] = [
                        'price' => $priceStripe->id,
                        'quantity' => $product->pivot->quantity
                    ];
                }




        $session = \Stripe\Checkout\Session::create([
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('checkout.success'),
            'cancel_url' => route('checkout.cancel'),


        ]);

        return redirect()->away($session->url);

    }

    public function success()
    {
        $user = auth()->user();

        $cart = Cart::where('user_id', $user->id)->where('is_paid', false)->first();

        if ($cart) {
            $cart->is_paid = true;
            $cart->save();
        }

        return view('checkout.success');
    }
    // public function success()
    // {
    //     return view ('checkout.sucess');
    // }

    // public function createCheckoutSession(Request $request)
    // {
    //     

    //     // Get the cart data from the request
    //     $cart = $request->input('cart');
    //     $stripe = new StripeClient(config('services.stripe.secret'));

    //     $lineItems = [];

    //     // Loop through cart products and create line items
    //     foreach ($cart['products'] as $product) {
    //         $price = $stripe->prices->create([
    //             'currency' => 'usd',
    //             'unit_amount' => $product['price'] * 100, // Stripe expects the amount in cents
    //             'product_data' => ['name' => $product['name']],
    //         ]);
    //         $lineItems[] = [
    //             'price' => $price->id,
    //             'quantity' => $product['pivot']['quantity'],
    //         ];
    //     }

    //     // Create a checkout session
    //     $checkout_session = Session::create([
    //         'payment_method_types' => ['card'],
    //         'line_items' => $lineItems,
    //         'mode' => 'payment',
    //         'success_url' => route('checkout.success'),
    //         'cancel_url' => route('checkout.cancel'),
    //     ]);

    //     return redirect()->to($checkout_session->success_url);
    // }
}



    // let's try it with test data first 

//     public function showPaymentForm()
//     {
//         return view('checkout.checkout');
//     }

//     public function processPayment(Request $request)
//     {
//         \Log::info($request->all());
//         Stripe::setApiKey(config('services.stripe.secret'));

//         try {
//             Charge::create([
//                 'amount' => 1000, // Amount in cents
//                 'currency' => 'usd',
//                 'source' => $request->stripeToken,
//                 'description' => 'Test Payment',

//                 //things we can enter to make it more fancy 
//                 // receipt_email
//                 // shipping
//                 //status


//                 //in the checkout we have to enter shipping data too 
//             ]);

//             // $request->session()->flash('success', 'Payment successful!');
//             return redirect()->route('checkout.success')->with('success', 'Payment successful!');
//         } catch (\Exception $e) {
//             // $request->session()->flash('error', $e->getMessage());
//             return redirect()->route('checkout.cancel')->with('error', $e->getMessage());
//         }
//     }
// }