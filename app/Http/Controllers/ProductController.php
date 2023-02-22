<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //
    public function get(Request $request){
        $data = Product::all();
        return view('welcome',[
            'data'=>$data
        ]);
    }

    public function addToCard(Request $request)
    {
        if(Auth::check()){
            $cart = Cart::where('product_id',$request['product_id'])
                        ->where('user_id',auth()->user()->id)->get();

           if(count($cart)>0){
            //update qty product in cart
            $data = Cart::find($cart[0]->id);
            $data->qty = intval($cart[0]->qty) + intval($request['qty']);
            $data->save();

           }else{
            //add new product to acrt
            $data = new Cart();
            $data->setData($request);
            $data->qty = $request['qty'];
            $data->save();
           }

           $orderCart = Cart::where('user_id',auth()->user()->id)->get();
           return view('add_to_card',[
             'data' => $orderCart
           ]);
            
        }else{
            return view('auth.login');
        }
    }

    public function view_cart(Request $request){
        $orderCart = Cart::where('user_id',auth()->user()->id)
        ->join('product','product.id','cart.product_id')
        ->select(
            'cart.*',
            'product.*'
        )->get();
           return view('add_to_card',[
             'data' => $orderCart
           ]);
    }
}
