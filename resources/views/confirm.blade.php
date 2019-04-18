@extends('layouts.master')

@section('content')
    <h1>入力内容確認</h1>
    <form action="/post/create" method="post">
        @csrf
        <div class="row">
            <label class="col-sm-2 control-label" for="name">名前：</label>
            <input type="hidden" name="name" value="{{$post->name}}">
            <div class="col-sm-10">{{$post->name}}</div>
        </div>
        <div class="row">
            <label class="col-sm-2 control-label" for="age">年齢：</label>
            <input type="hidden" name="age" value="{{$post->age}}">
            <div class="col-sm-10">{{$post->age}}歳</div>
        </div>
        <div class="row">
            <label class="col-sm-2 control-label" for="content">投稿内容：</label>
            <input type="hidden" name="content" value="{{$post->content}}">
            <div class="col-sm-10">{{$post->content}}</div>
        </div>
        <input type="submit" value="保存する">
    </form>
@endsection