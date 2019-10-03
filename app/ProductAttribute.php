<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class ProductAttribute extends Model
{
  use SoftDeletes;

  protected $fillable = [
  	'product_id', 'size_id', 'color_id', 'quantity',
  ];

  /**
   * Set the keys for a save update query.
   *
   * @param  \Illuminate\Database\Eloquent\Builder  $query
   * @return \Illuminate\Database\Eloquent\Builder
   */
  protected function setKeysForSaveQuery(Builder $query)
  {
      $query
        ->where('product_id', '=', $this->getAttribute('product_id'))
        ->where('size_id', '=', $this->getAttribute('size_id'))
        ->where('color_id', '=', $this->getAttribute('color_id'));

      return $query;
  }

  public function product()
    {
        return $this->belongsTo('App\Product');
    }
    public function color()
    {
        return $this->belongsTo('App\Color');
    }
      public function size()
    {
        return $this->belongsTo('App\Size');
    }

    public function orderDetails()
    {
      return $this->hasMany('App\OrderDetail');
    }
}
