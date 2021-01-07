@extends('layouts.helloapp')

@section('title', 'Edit')

@section('menubar')
    @parent
    更新ページ
@endsection

@section('content')
    <form action="/hello/edit" method="post">
        @csrf
        <table>
            <input type="hidden" name="id" value="{{$form->id}}">
            <tr>
                <th>name:</th>
                <td><input type="text" name="name" value="{{$form->name}}"></in></td>
            </tr>
            <tr>
                <th>mail:</th>
                <td><input type="text" name="mail" value="{{$form->mail}}"></in></td>
            </tr>
            <tr>
                <th>age:</th>
                <td><input type="text" name="age" value="{{$form->age}}"></in></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="更新する"></td>
            </tr>
        </table>
    </form>
@endsection