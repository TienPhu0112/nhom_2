<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableOrder extends Model
{
    use HasFactory;

    public function foods(){
        return $this -> belongsTo('App/Models/Food');
    }

    public function orders(){
        return $this -> belongsTo('App/Models/Order');
    }
}
