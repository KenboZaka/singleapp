<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use App\Http\Requests\ValiRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index', ['posts' => $posts]);
    }

    public function create(ValiRequest $request)
    {
           $post = new Post;
           $post->name = $request ->name;
           $post->age = $request ->age;
           $post->content = $request ->content;
           $post->save();
            return view('confirm', ['post'=>$post]);
    }

    public function show($id)
    {
            $post = Post::findOrFail($id);
            return view('show', ['post'=>$post]);
    }

    public function destroy(Request $request, $id, Post $post)
    {
            $post = Post::find($id);
            $post->delete();
            return redirect('/post');
    }
}