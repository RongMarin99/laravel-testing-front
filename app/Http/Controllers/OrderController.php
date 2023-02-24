<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\History;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function store(Request $request)
    {
        $data = new Order();
        $data->setData($request);
        $data->save();

        $cart = Cart::join('product','product.id','cart.product_id')
                    ->where('user_id',auth()->user()->id)
                    ->where('qty','>',0)
                    ->select(
                        'cart.*',
                        'product.price'
                    )->get();

        foreach($cart as $item){
            $history = new History();
            $history->order_id = $data->id;
            $history->user_id = auth()->user()->id;
            $history->product_id = $item['product_id'];
            $history->qty = $item['qty'];
            $history->price = $item['price'];
            $history->total = floatval($item['qty']*$item['price']);
            $history->save();

            $delete_cart = Cart::find($item['id']);
            $delete_cart->delete();
        }

        $data = Product::all();
        return view('home',['data'=>$data]);
    }
}
