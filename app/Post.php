<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title','body','image','category_id','user_id','status',
    ];

    public function category(){
    	return $this->belongsTo('App\Category');
    }
     public function user(){
    	return $this->belongsTo('App\User');
    }
     public function reviews(){
    	return $this->hasMany('App\Review');
    }
}
