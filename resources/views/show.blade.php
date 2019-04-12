@extends('layouts.master')

@section('content')
        <div>
                <table>
                        <tr>
                        <td>{{$post->name}}</td>
                        <td>{{$post->age}}</td>
                        <td>{{$post->content}}</td>
                        </tr>
                </table>
                <a href="/index">一覧に戻る</a>
                <div>
                {{-- <input type="button" method="delete" route="{{}}">
                        {{Form::open(['method'=>'delete', 'route'=>['post.delete', $articles->id]])}}
                        {{Form::submit('削除')}}
                        {{Form::close()}}
                </div> --}}
                
        </div>
@endsection
