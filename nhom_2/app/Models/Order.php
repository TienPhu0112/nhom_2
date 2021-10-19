<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function tableOrders(){
        return $this -> hasMany('App\Models\TableOrder');
    }

    public function customers(){
        return $this -> belongsTo('App\Models\Customer');
    }

    public function tables(){
        return $this -> belongsTo('App\Models\Table');
    }

    public function foods(){
        return $this -> belongsToMany('App\Models\Food',
            'table_orders','order_id','food_id');
    }
}
