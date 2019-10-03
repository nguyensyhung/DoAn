<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable=[
    	'total', 'date', 'status', 'user_id', 'address_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function address()
    {
        return $this->belongsTo('App\Address');
    }

    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetail');
    }
}
