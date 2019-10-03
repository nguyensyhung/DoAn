<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function productAttributes()
    {
        return $this->hasMany('App\ProductAttribute');
    }
    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetail');
    }

}
