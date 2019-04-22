@extends('layouts.master')

@section('content')
<div>
            
    <h1>single_App</h1>

    <form class="form-group mb-5" action="/post/confirm" method="post">
        @csrf
        <label for="title">タイトル</label>
            <input class="form-control mb-4" type="text" name="title" id="title" placeholder="enter_title" value="{{old('title')}}">
            @if($errors->has('title'))
                <span class="text-danger">{{$errors->first('title')}}</span>
            @endif
        <label for="name">名前</label>
            <input class="form-control mb-4" type="text" name="name" id="name" placeholder="enter_name" value="{{old('name')}}">
            @if($errors->has('name'))
                <span class="text-danger">{{$errors->first('name')}}</span>
            @endif
        <label for="name">年齢</label>
            <input class="form-control mb-4" type="text" name="age" id="age" placeholder="enter_age" value="{{old('age')}}">
            @if($errors->has('age'))
                <span class="text-danger">{{$errors->first('age')}}</span>
            @endif
        <label for="content">投稿内容</label>
            <textarea  class="form-control mb-2" name="content" id="content" value="{{old('content')}}"></textarea>
            @if($errors->has('content'))
                <span class="text-danger">{{$errors->first('content')}}</span>
            @endif
        <input class="btn btn-primary my-2" type="submit" value="投稿する">
    </form>
    <div class="card mt-2">
        @foreach($posts as $post) 
        <a class="card-header" href="/post/detail/{{$post->id}}">{{$post->title}}</a>
        <div class="card-body">
        <div class="card-text">
            <p>{{$post->name}}</p>
            <p>{{$post->age}}歳</p>
            <p>{!!nl2br($post->content)!!}</p>
        </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
