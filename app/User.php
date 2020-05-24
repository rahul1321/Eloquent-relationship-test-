<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    

    public function phone(){

    	return $this->hasOne(Phone::class);
    }


    public function posts(){

    	return $this->hasMany(Post::class);
    }
}
