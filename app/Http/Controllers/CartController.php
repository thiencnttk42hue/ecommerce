<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart');
        if(!isset($cart)) $cart = array();
        return view('web.cart', array('cart' => $cart));
    } 
    public function delete($id, Request $request)
    {
        
    }

}

