@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
    <p>showの部分だけを上書きしている</p>
@endsection

@section('content')
    <p>{{$msg}}</p>
    @if(count($errors)> 0)
        <p>下記エラーが発生しています</p>
    @endif
    <form action="/hello" method="post">
        @csrf
        <table>
            @error('name')
                <tr>
                    <th>ERROR</th>
                    <td>{{$message}}</td>
                </tr>
            @enderror
            <tr>
                <th>name: </th>
                <td><input type="text" name="name"></td>
            </tr>
            @error('mail')
                <tr>
                    <th>ERROR</th>
                    <td>{{$message}}</td>
                </tr>
            @endif
            <tr>
                <th>mail: </th>
                <td><input type="text" name="mail"></td>
            </tr>
            @error('age')
                <tr>
                    <th>ERROR</th>
                    <td>{{$message}}</td>
                </tr>
            @endif
            <tr>
                <th>age: </th>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="送信"></td>
            </tr>
        </table>
    </form>

@endsection

@section('footer')
    copyright 2020
@endsection