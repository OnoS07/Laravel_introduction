@extends('layouts.helloapp')

@section('title', 'Board.Add')

@section('menubar')
    @parent
    投稿ページ
@endsection

@section('content')
    <form action="/board/add" method="post">
        @csrf
        <table>
            <tr>
                <th>person_id:</th>
                <td>
                    <input type="text" name="person_id">
                </td>
            </tr>
            <tr>
                <th>title:</th>
                <td>
                    <input type="text" name="title">
                </td>
            </tr>
            <tr>
                <th>message</th>
                <td>
                    <input type="text" name="message">
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" value="作成する">
                </td>
            </tr>
        </table>
    </form>

@endsection

@section('footer')
    copyright 2020
@endsection