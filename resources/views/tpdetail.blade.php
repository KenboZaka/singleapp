@extends('layouts.master')

@extends('title', 'Single_App')

@extends('content')
    <div>
        {{-- 記事の詳細を表示 --}}
            <p>{!! nl2br()!!}</p>  
    </div>
    {{-- 記事の投稿フォーム --}}
    <div>
        <form class="form-group mb-5" action="/post/confirm" method="post">
            @csrf
            <label for="title">タイトル</label>
                @if($errors->has('title'))
                <span class="text-danger">{{$errors->first('title')}}</span>
                @endif
                <input class="form-control mb-4" type="text" name="title" id="title" placeholder="enter_title" value="{{old('title')}}">
                
            <label for="name">名前</label>
                @if($errors->has('name'))
                <span class="text-danger">{{$errors->first('name')}}</span>
                @endif
                <input class="form-control mb-4" type="text" name="name" id="name" placeholder="enter_name" value="{{old('name')}}">
                
            <label for="name">年齢</label>
                @if($errors->has('age'))
                <span class="text-danger">{{$errors->first('age')}}</span>
                @endif
                <input class="form-control mb-4" type="text" name="age" id="age" placeholder="enter_age" value="{{old('age')}}">
                
            <label for="content">投稿内容</label>
                @if($errors->has('content'))
                <span class="text-danger">{{$errors->first('content')}}</span>
                @endif
                <textarea  rows="5" class="form-control mb-2" name="content" id="content" value="{{old('content')}}"></textarea>
    
            <input class="btn btn-primary my-2" type="submit" value="投稿する">
        </form>
    </div>

@endsection