<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    // Show the checkout page
    public function show()
    {
        return view('checkout');
    }
}
