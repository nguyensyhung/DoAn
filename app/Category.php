<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
  
    use SoftDeletes;

    protected $fillable = [
        'name','slug', 'parent_id', 
    ];

    public function products()
    {
    	return $this->hasMany('App\Product');
    }

    public function parent()
    {
        return $this->hasOne('App\Category', 'id');
    }

    public function child()
    {
        return $this->hasMany('App\Category', 'parent_id');
    } 
}
