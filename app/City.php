<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class City extends Model
{
    use SoftDeletes;

    protected $fillable= ['name',];

    public function addresses()
    {
    	return $this->hasMany('App\Address');
    }
    public function districts()
    {
    	return $this->hasMany('App\District');
    }
}
