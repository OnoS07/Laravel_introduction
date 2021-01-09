@extends('layouts.helloapp')

@section('title', 'ログイン')

@section('menubar')
    @parent
    ログインページ
@endsection

@section('content')
    <p>{{$message}}</p>
    <form action="/hello/auth" method="post">
        @csrf
        <table>
            <tr>
                <th>mail:</th>
                <td>
                    <input type="text" name="email">
                </td>
            </tr>
            <tr>
                <th>pass:</th>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" value="ログイン">
                </td>
            </tr>
        </table>
    </form>

@endsection

@section('footer')
    copyright 2020
@endsection