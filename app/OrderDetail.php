<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'order_id', 'product_id', 'size_id', 'color_id', 'quantity',
    ];
    public function product_attribute()
    {
    	return $this->belongsTo('App\ProductAttribute');
    }

    public function order()
    {
    	return $this->belongsTo('App\Order');
    }
    
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
    public function size()
    {
        return $this->belongsTo('App\Size');
    }
    public function color()
    {
        return $this->belongsTo('App\Color');
    }

}
