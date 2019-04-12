@extends('layouts.master')

@section('content')
    <h1>入力内容確認</h1>

    <div class="row">
        <label class="col-sm-2 control-label" for="name">名前：</label>
    <div class="col-sm-10">{{$post->name}}</div>
    </div>
    <div class="row">
        <label class="col-sm-2 control-label" for="age">年齢：</label>
    <div class="col-sm-10">{{$post->age}}</div>
    <div class="col-sm-8">歳</div>
    </div>
    <div class="row">
        <label class="col-sm-2 control-label" for="content">投稿内容：</label>
    <div class="col-sm-10">{{$post->content}}</div>
    </div>
@endsection