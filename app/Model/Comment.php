<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;
use App\Model\User;

class Comment extends Model
{
    public function products()
    {
        return $this->belongsTo(Product::class);
    }

    public function comments()
    {
        return $this->belongsTo(User::class);
    }
}
