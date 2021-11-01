<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    public function users(){
        return $this -> belongsTo('App\Models\User','author_id','id');
    }

    use HasFactory;
}
