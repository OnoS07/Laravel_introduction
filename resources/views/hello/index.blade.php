@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
    <p>showの部分だけを上書きしている</p>
@endsection

@section('content')
    <p>本文のコンテンツ</p>
    <p><middleware>yahoo.com</middleware></p>
    <p><middleware>yahoo.com</middleware></p>
@endsection

@section('footer')
    copyright 2020
@endsection