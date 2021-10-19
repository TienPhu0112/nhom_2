<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    public function dishTypes(){
        return $this -> belongsTo('App\Models\DishType');
    }

    public function foodOrders(){
        return $this -> hasMany('App\Models\FoodOrder');
    }

    public function tableOrders(){
        return $this -> hasMany('App\Models\TableOrder');
    }

    public function togoOrders(){
        return $this -> belongsToMany('App\Models\TogoOrder',
            'food_orders','food_id','order_id');
    }

    public function orders(){
        return $this -> belongsToMany('App\Models\Order',
            'table_orders','food_id','order_id');
    }
}
