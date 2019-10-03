<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttributeValue extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'attribute_id', 'name', 
    ];
    public function attribute()
    {
    	return $this->belongsTo('App\Attribute');
    }
    public function productAttributes()
    {
    	return $this->hasMany('App\ProductAttribute');
    }
}
