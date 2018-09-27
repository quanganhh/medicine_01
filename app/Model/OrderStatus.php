<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Order;

class OrderStatus extends Model
{
     return $this->hasMany(Order::class);
}
