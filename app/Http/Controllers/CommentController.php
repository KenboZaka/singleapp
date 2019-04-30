<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function create(Request $request){
        // dd($request) ページが切り替わったらリクエストが届いているか確認;
        $comment = new Comment;
        $comment->title = $request->title;
        $comment->name = $request->name;
        $comment->content = $request->content;
        $comment->post_id = $request->post_id;
        $comment->save();
        return redirect("post/detail/$request->post_id"); #リクエストで入力したpost_idはcommentsテーブルの番号
        // return redirect('post/detail/'.$request->post_id)文字列としてurlを作る;
    }
}
