@extends('layouts.master')

@section('content')
        <div>
        <form action="" method="post">
                <label for="name">名前</label>
                <input type="text" name="name" id="name" value="{{$post->name}}">
                @if($errors->has('name'))
                        <span class="text-danger">{{$errors->first('name')}}</span>
                @endif
                <label for="name">年齢</label>
                <input type="text" name="age" id="age" placeholder="年齢" value="{{$post->age}}">
                @if($errors->has('age'))
                        <span class="text-danger">{{$errors->first('age')}}</span>
                @endif
                <label for="content">投稿内容</label>
                <textarea name="content" id="content" >{{$post->content}}</textarea>
                @if($errors->has('content'))
                        <span class="text-danger">{{$errors->first('content')}}</span>
                @endif
                <input type="submit" value="変更する">
        </form>
                <a href="/post">一覧に戻る</a>
        </div>
@endsection
