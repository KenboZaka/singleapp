@extends('layouts.master')

@section('content')
    <h1>入力内容確認</h1>
    <form class="form-group" action="/post/create" method="POST">
        @csrf
        <label class="mt-3" for="title">タイトル：</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$post->title}}" readonly>

        <label class="mt-3" for="name">名前：</label>
            <input class="form-control" type="text" name="name" id="name" value="{{$post->name}}" readonly>

        <label class="mt-3" for="age">年齢：</label>
            <input class="form-control" type="text" name="age" id="age" value="{{$post->age}}" readonly>

        <label class="mt-3" for="content">投稿内容：</label>
            <textarea class="form-control" type="text" name="content" id="content" readonly>{{$post->content}}</textarea>
            <input class="mt-4 btn btn-info" type="submit" value="投稿する">
    </form>
    <a class="mt-3 btn btn-secondary" href="/post">一覧に戻る</a>
@endsection