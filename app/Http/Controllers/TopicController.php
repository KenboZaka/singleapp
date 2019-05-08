<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;

class TopicController extends Controller
{
    public function index(){
        $topics = Topic::limit(10)->get();
        return view('index', ['topics' => $topics]);
    }
}
