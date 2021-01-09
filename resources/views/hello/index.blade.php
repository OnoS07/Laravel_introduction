@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
    <p>showの部分だけを上書きしている</p>
@endsection

@section('content')
    @if(Auth::check())
        <p>USER:{{$user->name}}</p>
    @else
        <p>ログインしていません</p>
        <p>
            <a href="/login">ログイン</a>
            or
            <a href="/register">登録</a>
        </p>
    @endif

    <table>
        <tr>
            <th>Name</th>
            <th>Mail</th>
            <th>Age</th>
        </tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2020
@endsection