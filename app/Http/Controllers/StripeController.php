<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;


class StripeController extends Controller
{
    // Demo data
    private function products()
    {
        return [
            1 => ['name' => 'Laptop Bag',  'price' => 1025],
            2 => ['name' => 'Headphones',  'price' => 440],
            3 => ['name' => 'Smart Watch', 'price' => 699],
        ];
    }

    public function index()
    {
        return view('products', ['products' => $this->products()]);
    }

    public function checkout(Request $request)
    {
        $product = $this->products()[$request->product_id];

        Stripe::setApiKey(config('services.stripe.secret'));

        $session = Session::create([
            'line_items' => [[
                'price_data' => [
                    'currency'     => 'pkr',
                    'product_data' => ['name' => $product['name']],
                    'unit_amount'  => $product['price'] * 100, 
                ],
                'quantity' => 1,
            ]],
            'mode'        => 'payment',
            'success_url' => route('stripe.success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url'  => route('stripe.cancel'),
        ]);

        return redirect($session->url);
    }

    public function success(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        $session = Session::retrieve($request->session_id);

        return view('success', ['session' => $session]);
    }

    public function cancel()
    {
        return view('cancel');
    }
}