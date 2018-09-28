<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;
use App\Model\Order;

class OrderDeatail extends Model
{
    public function products()
    {
        return $this->belongsTo(Product::class);
    }

    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
}
