@extends('layouts.master')

@section('content')
<div class="my-2">
            
    <h4>トピック一覧</h4>
<div class="topicslist my-2 center">
    <ul class="list-unstyled nav nav-tabs">
        <li class="nav-item "><a href="#tab1" data-toggle="tab" class="nav-link navbar-default">Tab 1</a></li>
        <li class="nav-item"><a href="#tab2" data-toggle="tab" class="nav-link navbar-default active">Tab 2</a></li>
        <li class="nav-item"><a href="#tab3" data-toggle="tab" class="nav-link navbar-default">Tab 3</a></li>
    </ul>

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
<div class="container mb-5">
    <div class="row mt-4">
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
@endsection
