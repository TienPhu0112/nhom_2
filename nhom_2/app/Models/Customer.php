<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function togoOrders(){
        return $this -> hasMany('App/Models/TogoOrder');
    }

    public function orders(){
        return $this -> hasMany('App/Models/Order');
    }
}
