<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    const PRODUCT_ID = 'product_id';
    const USER_ID = 'user_id';
    const QTY = 'qty';
    protected $table = 'cart';

    protected $fillable = [
        self::PRODUCT_ID,
        self::USER_ID,
        self::QTY
    ];

    public function setData($request){
        $this->{self::USER_ID} = auth()->user()->id;
        $this->{self::PRODUCT_ID} = $request[self::PRODUCT_ID];
    } 
}
