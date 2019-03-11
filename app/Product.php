<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Category;

class Product extends Model
{
    public function category(){
    	return $this->belongsTo('App\Category');
    }


    public function getImgPathAttribute($value){
    	return $value ? $value : '/photos/4/no.jpg';
    }
}
