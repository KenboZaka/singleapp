@extends('layouts.master')

@section('content')
<div>
            
    <h1>掲示板サービスはじめました</h1>

    <form action="/post/confirm" method="post">
        @csrf
        <label for="name">名前</label>
            <input type="text" name="name" id="name" placeholder="お名前" value="{{old('name')}}">
            @if($errors->has('name'))
                <span class="text-danger">{{$errors->first('name')}}</span>
            @endif
        <label for="name">年齢</label>
            <input type="text" name="age" id="age" placeholder="年齢" value="{{old('age')}}">
            @if($errors->has('age'))
                <span class="text-danger">{{$errors->first('age')}}</span>
            @endif
        <label for="content">投稿内容</label>
            <textarea name="content" id="content" value="{{old('content')}}"></textarea>
            @if($errors->has('content'))
                <span class="text-danger">{{$errors->first('content')}}</span>
            @endif
        <input type="submit" value="投稿する">
    </form>
    <div>
        <table>
            @foreach($posts as $post) 
        <a href="/post/detail/{{$post->id}}">
                    {{$post->content}}
                </a> 
                    {{$post->name}},
                    {{$post->age}}<br>
            @endforeach
        </table>
    </div>
</div>
@endsection
