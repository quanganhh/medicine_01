<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'address',
        'ship_date',
        'shipment_id',
        'payment_id',
        'order_status_id',
        'update_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payment()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function shipment()
    {
        return $this->belongsTo(Shipping::class);
    }

    public function orderStatus()
    {
        return $this->belongsTo(OrderStatus::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
