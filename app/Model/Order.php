<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\User;
use App\Model\PaymentMethod;
use App\Model\Shipping;
use App\Model\OrderStatus;
use App\Model\OrderDetail;

class Order extends Model
{
    protected $fillable = [
        'address',
        'ship_date',
        'shipping_id',
        'payment_id',
        'order_status_id',
        'update_at',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function payment_method()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function shipping()
    {
        return $this->belongsTo(Shipping::class);
    }

    public function orderStatus()
    {
        return $this->belongsTo(OrderStatus::class);
    }

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class)
    }
}
