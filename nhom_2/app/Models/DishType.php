<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DishType extends Model
{
    use HasFactory;

    public function foods(){
        return $this -> hasMany('App\Models\Food', 'dishtype_id', 'id');
    }
}
