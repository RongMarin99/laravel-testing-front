<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function update(Request $request)
    {
        $data = Cart::find($request['id']);
        $data->qty = $request['qty'];
        $data->save();
        return redirect()->back();
    }

    public function checkout(Request $request){
        $data = Cart::where('user_id',auth()->user()->id)
        ->where('qty','>',0)->get();
        if(count($data)>0){
            return view('checkout');
        }else{
            $data = Product::all();
            return view('home',[
                'data' => $data
            ]);
        }
    }
}
