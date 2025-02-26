<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $brands = Brand::orderBy('name','ASC')->get();
        $products = Product::orderBy('created_at', 'DESC')->paginate(12);
        return view('shop', compact('products','brands'));
    }
    public function product_details($product_slug)
    {
        $product = Product::where('slug',$product_slug)->first();
        return view('details',compact('product'));
    }
}
