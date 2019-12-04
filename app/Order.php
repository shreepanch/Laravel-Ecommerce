<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	public function customer()
    {
        return $this->hasOne('App\Customer','id');
    }
    public function product()
    {
        return $this->hasOne('App\Product','id');
    }

   
	protected $table = 'order';


	protected $fillable = [ 'user_id', 'grand_total', 'order-date', 'status', 'created_at', 'updated_at'];
}

