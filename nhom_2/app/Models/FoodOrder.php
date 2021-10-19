<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodOrder extends Model
{
    use HasFactory;

    public function foods(){
        return $this -> belongsTo('App/Models/Food');
    }

    public function togoOrders(){
        return $this -> belongsTo('App/Models/TogoOrder');
    }
}
