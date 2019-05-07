<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Comment;
use \App\Topic;
use \App\User;
use \App\Evaluation;

class Post extends Model
{   
    // public $timestamps = false;
    protected $fillable = ['user_id','topic_id','content'];

    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function Evaluations(){
        return $this->hasMany('App\Evaluation');
    }

    public function topics(){
        return $this->belongsTo('App\Topic');
    }

    public function users(){
        return $this->belongsTo('App\User');
    }
    public $incrementing = false;
}
