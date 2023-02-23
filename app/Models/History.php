<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    const PRODUCT_ID = 'product_id';
    const QTY = 'qty';
    const PRICE = 'price';
    const TOTAL = 'total';
    const USER_ID = 'user_id';
    const ORDER_ID = 'order_id';
    protected $table = 'history_order';
    protected $primarykey = 'id';

    protected $fillable = [
        self::PRODUCT_ID,
        self::QTY,
        self::PRICE,
        self::TOTAL,
        self::USER_ID,
        self::ORDER_ID
    ]; 

}
