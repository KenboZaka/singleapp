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
                <a href="/post">一覧に戻る</a>

                <div>
                <form type="hidden" action="/post/delete/{{$post->id}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">削除する</button>
                </form>
                <form type="hidden" action="/post/edit/{{$post->id}}" method="get">
                        @csrf
                        <button type="submit" class="btn btn-success">編集する</button>
                </form>
        </div>
@endsection
