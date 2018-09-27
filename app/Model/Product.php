<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Category;
use App\Model\OrderDeatail;
use App\Model\Vote;

class Product extends Model
{
    public function categories()
    { 
        return $this->belongsTo(Category::class);
    }

    public function orderDeatail()
    {
        return $this->hasMany(orderDeatail::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
