<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use App\Http\Requests\ValiRequest;

class PostController extends Controller
{
    // トップページと投稿内容表示
    public function index()
    { 
        $posts = Post::all();
        return view('index', ['posts' => $posts]);
    }

    // 投稿内容の確認・表示
    public function confirm(Request $request)
    {
        $post = new Post;
        $post->name = $request->name;
        $post->age = $request->age;
        $post->content = $request->content;
        return view('confirm', ['post' => $post]);
    }
    
    // 新規投稿メソッド・トップページへのリダイレクト
    public function create(ValiRequest $request)
    {
        $post = new Post;
        $post->name = $request->name;
        $post->age = $request->age;
        $post->content = $request->content;
        $post->save();
        return redirect('/post');
    }


//     public function show($id)
//     {
//             $post = Post::findOrFail($id);
//             return view('show', ['post'=>$post]);
//     }

//     public function destroy(Request $request, $id, Post $post)
//     {
//             $post = Post::find($id);
//             $post->delete();
//             return redirect('/post');
//     }
 }