<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function cart(){
        return $this->belongsTo(Cart::class);
    }
    public function bill(){
        return $this->belongsTo(Bill::class);
    }
}
