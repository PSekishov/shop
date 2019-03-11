<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function setSlugAttribute($value){
      if(!$value){
      	$this->attributes['slug'] = str_slug($this->attributes['name'],'-');
      }else{
      	$this->attributes['slug'] = str_slug($value,'-');
      }

    }

    public function getImgPathAttribute($value){
    	return $value ? $value : '/photos/4/no.jpg';
    }


}
