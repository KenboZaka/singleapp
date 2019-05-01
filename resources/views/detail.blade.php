@extends('layouts.master')

@section('content')
        <div class="justify-content-end">
        <a class="mb-3 mt-0 btn btn-secondary" href="/post">一覧に戻る</a>
        </div>
<div class="card">
        <div class="card-header">
        <p class="h3 d-block">{{$post->title}}</p>
        @auth
        <form action="/post/delete{{$post->id}}"  method="post">
        @csrf
        <input type="submit" class="btn btn-danger float-right ml-3" value="削除する">
        </form>
        {{-- 以後注意！重要：form閉じタグがなかったことで正常に作動しなかった      --}}
        <a href="/post/edit/{{$post->id}}" class="btn btn-success float-right">編集する</a>
        @endauth
        </div>
        <div class="card-body">
            <p>{{$post->name}}</p>
            <p>{{$post->age}}歳</p>
            <p>{{$post->content}}</p>
        </div>
        <div class="card-footer">
        </div>
        <div class="card mt-0 border-0">
            @foreach($post->comments as $comment)
            <div class="card-header" >
                <a href="">{{$comment->title}}</a>
                <p class="d-inlineblock float-right">{{$comment->created_at}}</p>
            </div>
            <div class="card-body">
            <div class="card-text">
                <p>{{$comment->name}}</p>
                <p>{{$comment->age}}歳</p>
                <p>{!!nl2br($comment->content)!!}</p>
            </div>
            </div>
            @endforeach
            </div>
        </div>
        <div class="my-3">
        <h3>コメント</h3>
        <form class="form-group mb-5" action="/comment/create" method="post">
                @csrf
        
                <label for="title">タイトル</label>
                @if($errors->has('title'))
                <span class="text-danger">{{$errors->first('title')}}</span>
                @endif
                <input class="form-control mb-4" type="text" name="title" id="title" placeholder="enter_title" value="{{old('title')}}">
                
            <label for="name">名前</label>
                @if($errors->has('name'))
                <span class="text-danger">{{$errors->first('name')}}</span>
                @endif
                <input class="form-control mb-4" type="text" name="name" id="name" placeholder="enter_name" value="{{old('name')}}">
                
            <label for="content">投稿内容</label>
                @if($errors->has('content'))
                <span class="text-danger">{{$errors->first('content')}}</span>
                @endif
                <textarea  class="form-control mb-2" name="content" id="content" value="{{old('content')}}"></textarea>
        
                <input type="hidden" name="post_id" value="{{$post->id}}">
                <input class="form-control btn btn-primary my-2" type="submit" value="投稿する">
        </form>
    </div>
    </div>
</div>
        

        
@endsection
