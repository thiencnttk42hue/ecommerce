<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::with('brand', 'category')->paginate(10);
        $categories = Category::all();
        $brands = Brand::all();
        return view('web.shop', array('products'=> $products, 'categories' => $categories, 'brands'=>$brands));
        
    }
    public function show($id)
    {
        $products = Product::find($id);
        $categories = Category::all();
        $brands = Brand::all();
        return view('web.shop', array('products' => $products,'categories' => $categories, 'brands'=>$brands));
    }
    
}