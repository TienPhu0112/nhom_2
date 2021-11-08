<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TogoOrder extends Model
{
    use HasFactory;

    public function foodOrders(){
        return $this -> hasMany('App\Models\FoodOrder', 'order_id', 'id');
    }

    public function customers(){
        return $this -> belongsTo('App\Models\Customer','customer_id', 'id');
    }

    public function foods(){
        return $this -> belongsToMany('App\Models\Food',
            'food_orders','order_id','food_id');
    }
}
