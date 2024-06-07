<?php

require 'vendor/autoload.php';

$YOUR_DOMAIN = 'http://localhost:8000';

$stripe = new \Stripe\StripeClient('sk_test_51PNIyLP5IC7sUCg71Z89CcpjUvZO9mTqygywzOJNjrCC4hDi84lYqeeYFAcRmgbVtVtVaXD84zKXTLFVd3VuF9at009sGCy1pS');

$checkout_session = $stripe->checkout->sessions->create([
  'line_items' => [[
    'price_data' => [
      'currency' => 'usd',
      'product_data' => [
        'name' => 'T-shirt',
      ],
      'unit_amount' => 2000,
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
   'success_url' => route('checkout.success', [], false),
  'cancel_url' =>  route('checkout.cancel', [], false),
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
?>