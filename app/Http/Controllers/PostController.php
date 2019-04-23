<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use \App\Comment;
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
    public function confirm(ValiRequest $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->name = $request->name;
        $post->age = $request->age;
        $post->content = $request->content;
        return view('confirm', ['post' => $post]);
    }
    
    // 新規投稿メソッド・トップページへのリダイレクト
    public function create(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->name = $request->name;
        $post->age = $request->age;
        $post->content = $request->content;
        $post->save();
        return redirect('/post');
    }

    public function detail($id)
    {
        $post = Post::findOrFail($id);
        return view('detail', ['post'=>$post]);
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/post');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('edit', ['post'=>$post]);
    }

    public function update(ValiRequest $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->name = $request->name;
        $post->age = $request->age;
        $post->content = $request->content;
        $post->save();
        return redirect('/post');
    }
 }