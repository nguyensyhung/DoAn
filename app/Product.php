<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
         'name', 'quantity', 'price', 'description','content','status' ,'category_id',
    ];

    public function productAttributes()
    {
        return $this->hasMany('App\ProductAttribute');
    }
    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetail');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function getOrderDetailsCountAttribute()
    {
        return $this->orderDetails->count();
    }

    public function colors() {
        return $this->belongsToMany('App\Color', 'product_attributes');
    }

    public function sizes() {
        return $this->belongsToMany('App\Size', 'product_attributes');
    }
}
