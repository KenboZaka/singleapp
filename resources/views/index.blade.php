@extends('layouts.master')

@section('content')
    <div class="container my-4">
    <div class="my-3">    
        <h4 class="ml-2"><i class="far fa-newspaper"></i> トピック一覧</h4>
    <div class="topicslist my-2 center">
    <ul class="list-unstyled nav nav-tabs">
        <li class="nav-item "><a href="#tab1" data-toggle="tab" class="nav-link navbar-default">Tab 1</a></li>
        <li class="nav-item"><a href="#tab2" data-toggle="tab" class="nav-link navbar-default active">Tab 2</a></li>
        <li class="nav-item"><a href="#tab3" data-toggle="tab" class="nav-link navbar-default">Tab 3</a></li>
    </ul>
    <div class="row">
    <div class="col-md-8">
    <div class="tab-content">
        <div id="tab1" class="tab-pane">
            <ul class="list-group list-unstyled my-2">
                <li class="list-group-item py-3"><a href="">Topic 1</a></li>
                <li class="list-group-item py-3"><a href="">Topic 2</a></li>
                <li class="list-group-item py-3"><a href="">Topic 3</a></li>
                <li class="list-group-item py-3"><a href="">Topic 4</a></li>
                <li class="list-group-item py-3"><a href="">Topic 5</a></li>
            </ul>
        </div>
        <div id="tab2" class="tab-pane active">
            <ul class="list-group list-unstyled my-2">
                <li class="list-group-item py-3"><a href="">Topic 6</a></li>
                <li class="list-group-item py-3"><a href="">Topic 7</a></li>
                <li class="list-group-item py-3"><a href="">Topic 8</a></li>
                <li class="list-group-item py-3"><a href="">Topic 9</a></li>
                <li class="list-group-item py-3"><a href="">Topic 10</a></li>
            </ul>
        </div>
        <div id="tab3" class="tab-pane">
            <ul class="list-group list-unstyled my-2">
                <li class="list-group-item py-3"><a href="">Topic 11</a></li>
                <li class="list-group-item py-3"><a href="">Topic 12</a></li>
                <li class="list-group-item py-3"><a href="">Topic 13</a></li>
                <li class="list-group-item py-3"><a href="">Topic 14</a></li>
                <li class="list-group-item py-3"><a href="">Topic 15</a></li>
            </ul>
        </div>
    </div>    
    </div>
    <div class="col-md-4 align-self-center card">
        <div class="card-body">
        <img class="card-img-top img-fluid" src="/img/Kenjiro_Ishizaka.jpeg" alt="">
        <h4 class="card-title">タイトル</h4>
        <p class="card-text">写真をアップしたいです。</p>
        <a class="card-link" href="">詳細へ</a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="topics my-5">
    <div class="container">
        <h4 class="p-2"><i class="fas fa-pencil-alt"></i>トピック別投稿</h4>
    <div class="">
    <div class="row">
        <div class="card col-md-4 p-0">
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
        <div class="card col-md-4 p-0">
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
        <div class="card col-md-4 p-0">
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
    </div>
    </div>
    </div>
@endsection
