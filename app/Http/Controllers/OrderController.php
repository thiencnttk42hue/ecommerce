<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use App\Models\Orderdetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        // $customer = session()->get('customer');
        // if(!isset($customer)) 
        //     return redirect()->route("customer.login");
        $cart = session()->get('cart');
        return view('web.order', array('cart'=> $cart));
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
        if(isset($cart[$request->id]))
            $cart[$request->id]['quantity'] += $request->quantity;
        else
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

    public function checkOut(Request $request)
    {
        // $customer = session()->get('customer');
        $customer = Customer::find(5);
        $cart = session()->get('cart');
        
        $order = Order::create(
            array_merge(
                $request->only(['name', 'desc', 'address', 'phone'])
                , array(
                    'status' => 1, 
                    'customer_id' => $customer['id'],
                    'name' => 'order'.time()
                )
            )
        );

        foreach ($cart as $orderdetail) {
            OrderDetail::create([
                'quantity' => $orderdetail['quantity'],
                'product_id' => $orderdetail['id'],
                'order_id' => $order['id']
            ]);
        }

        return redirect()->route('orders.index')->with('message', 'Đặt hàng thành công. Chng tôi sẽ giao hàng trong thời gian sớm nhất');
    }
}
