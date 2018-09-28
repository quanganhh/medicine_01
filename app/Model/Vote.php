<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;
use App\Model\User;

class Vote extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function vote()
    {
        return $this->belongsTo(User::class);
    }
}
