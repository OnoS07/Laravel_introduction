@extends('layouts.helloapp')

@section('title', 'Show')

@section('menubar')
    @parent
    インデックスページ
    <p>詳細ページ</p>
@endsection

@section('content')
    @if($items != null)
        @foreach($items as $item)
            <table width="400px">
                <tr>
                    <th width="50px">ID:</th>
                    <td width="50px">{{$item->id}}</td>
                    <th width="50px">name:</th>
                    <td width="50px">{{$item->name}}</td>                   
                </tr>
            </table>
        @endforeach
    @endif
@endsection

@section('footer')
    copyright 2020
@endsection