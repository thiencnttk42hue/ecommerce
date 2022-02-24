<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class LoginController extends Controller
{
    public function index()
    {
        return view("web.login");
    }

    public function checkCustomer(Request $request)
    {
        // dd($request->request);
        $customer = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        return redirect()->route('orders.index');
    }
}
