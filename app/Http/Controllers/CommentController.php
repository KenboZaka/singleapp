<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function create(Request $request){
        // dd($request);
        $comment = new Comment;
        $comment->title = $request->title;
        $comment->name = $request->name;
        $comment->content = $request->content;
        $comment->post_id = $request->post_id;
        $comment->save();
        return redirect("post/detail/$request->post_id");
        // return redirect('post/detail/'.$request->post_id);
    }
}
