<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
class ProductController extends Controller
{
    //
        function index()
        {
            $data = Product::all();
            return view("product",['products'=>$data]);
        }
        function detail($id)
        {
           
            $data=Product::find($id);
            //return $data;
            return view("detail",['product'=>$data]);
        }

        function addtocart(Request $req)
        {
           if ($req->session()->has('user'))
           {

            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect("/");
           }
        
           else{
            return redirect('/login');
           }

        }
        function search(Request $request)
        {
           
            $data=Product::where('name','like',$request->input('name').'%')->get();
     
            return view("search",['product'=>$data]);
        
    }
       static function cart_item()
       {

         $UserId=Session::get('user')['id'];
         return Cart::where('user_id',$UserId)->count();
        
       }
}
