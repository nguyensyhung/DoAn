<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'name', 'path', 'product_id',
    ];

    public function product()
    {
    	return $this->belongsTo('App\Product');
    }
}
