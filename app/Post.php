<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Comment;

class Post extends Model
{   
    // public $timestamps = false;
    protected $fillable = ['title', 'name', 'age', 'content'];

    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
