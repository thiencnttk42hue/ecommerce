<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('web.order');
    }

    public function order(Request $request)
    {
        $orderDetail = array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity    
        );

        $cart = session()->get('cart');
        if(!isset($cart)) $cart = array();
        $cart[$request->id] = $orderDetail;
        session()->put('cart', $cart);
        return redirect()->route('cart')->with('message', 'Đã thêm giỏ hàng thành công');
        
    }
    public function updateOrder(Request $request)
    {
        $cart = session()->get('cart');
        if(!isset($cart)) $cart = array();
        foreach($cart as $key => $value) {
            if($value['id'] == $request->id){
                $cart[$key]['quantity'] += $request->quantity ;
            }
        }
        session()->put('cart', $cart);
        return redirect()->route('cart')->with('message', 'Đã thêm giỏ hàng thành công');
        
    }
    public function deleteOrder(Request $request)
    {
        $cart = session()->get('cart');
        if(!isset($cart)) $cart = array();
        foreach($cart as $key => $value) {
            if($value['id'] == $request->id){
                unset($cart[$key]);
            }
        }
        session()->put('cart', $cart);
        return redirect()->route('cart')->with('message', 'Đã thêm giỏ hàng thành công');
        
    }
   
}
