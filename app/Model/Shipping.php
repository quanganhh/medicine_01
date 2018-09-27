<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Order;

class Shipping extends Model
{
    return $this->hasMany(Order::class);
}
