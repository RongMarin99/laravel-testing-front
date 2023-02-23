<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    const TABLE = 'order';
    const ID = 'id';
    const FIRST_NAME = 'first_name';
    const LAST_NAME = 'last_name';
    const EMAIL ='email';
    const PHONE = 'phone';
    const MESSAGE = 'message';
    const USER_ID = 'user_id';
    const STATUS = 'status';

    protected $table = self::TABLE;
    protected $primarykey = self::ID;
    protected $fillable = [
        self::FIRST_NAME,
        self::LAST_NAME,
        self::EMAIL,
        self::PHONE,
        self::MESSAGE,
        self::USER_ID,
        self::STATUS
    ];

    public function setData($request)
    {
        $this->{self::FIRST_NAME} = $request[self::FIRST_NAME];
        $this->{self::LAST_NAME} = $request[self::LAST_NAME];
        $this->{self::EMAIL} = $request[self::EMAIL];
        $this->{self::PHONE} = $request[self::PHONE];
        $this->{self::MESSAGE} = $request[self::MESSAGE];
        $this->{self::USER_ID} = auth()->user()->id;
    }
}
