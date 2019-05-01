@extends('layouts.master')

@section('content')
        <h1>編集</h1>
        <div>
        <form class="form-group" action="" method="post">
                @csrf
                <label for="title">タイトル</label>
                <input class="form-control" type="text" name="title" id="title" value="{{$post->title}}">
                @if($errors->has('title'))
                        <span class="text-danger">{{$errors->first('title')}}</span>
                @endif
                <label for="name">名前</label>
                <input class="form-control" type="text" name="name" id="name" value="{{$post->name}}">
                @if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                @endif
                <label for="name">年齢</label>
                <input class="form-control" type="text" name="age" id="age" placeholder="年齢" value="{{$post->age}}">
                @if($errors->has('age'))
                        <span class="text-danger">{{$errors->first('age')}}</span>
                @endif
                <label for="content">投稿内容</label>
                <textarea rows="5" class="form-control" name="content" id="content" >{{$post->content}}</textarea>
                @if($errors->has('content'))
                        <span class="text-danger">{{$errors->first('content')}}</span>
                @endif
                <input class="btn btn-info my-3" type="submit" value="変更する">
        </form>
                <a class="mt-2 btn btn-secondary" href="/post">一覧に戻る</a>
        </div>
@endsection
