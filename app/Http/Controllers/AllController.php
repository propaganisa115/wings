<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Cart;

use Session;

class AllController extends Controller
{
    
    public function shop(Request $request)
    {
       $product = Product::all();
       return view('shop',["product"=>$product]);
    }
    public function detail(Request $request,$product)
    {
       $product=Product::where("product_code",$product)->get();
       return view('detail',["product"=>$product]);
    }
    public function buy(Request $request,$product)
    {
        
        $cart = new Cart;

        $cart->product_code = $product;
        $cart->quantity =  $cart->quantity+1;
        $cart->save();

       $cart = Cart::select('product_name','quantity','unit','price','quantity','discount')
       ->leftJoin('product','product.product_code','=','cart.product_code')->get();
      
       return view('checkout',["cart"=>$cart]);
    }
    public function confirm(Request $request)
    {
       $product = Cart::select('product_name','quantity','unit','price','quantity','discount')
       ->leftJoin('product','product.product_code','=','cart.product_code')->get();
       return view('report',["product"=>$product]);
    }
}