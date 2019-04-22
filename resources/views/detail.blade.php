@extends('layouts.master')

@section('content')
        <div class="card">
                <div class="card-header">
                        <p class="h3">{{$post->title}}</p>
                </div>
                <div class="card-body">
                        <p>{{$post->name}}</p>
                        <p>{{$post->age}}歳</p>
                        <p>{{$post->content}}</p>
                </div>
                <div class="card-footer">
                        <a href="/post/edit/{{$post->id}}" class="btn btn-success float-left">編集する</a>
                        <form action="/post/delete{{$post->id}}"  method="post">
                        @csrf
                        <input type="submit" class="btn btn-danger float-left ml-3" value="削除する">
                        </form>
                </div>
        </div>
                <a class="mt-4 btn btn-secondary" href="/post">一覧に戻る</a>

                
@endsection
