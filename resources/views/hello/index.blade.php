@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
    <p>showの部分だけを上書きしている</p>
@endsection

@section('content')
    <p>本文のコンテンツ</p>
    <p>必要なことをここに書いて、section →　yieldで表示させている</p>
    <ul>
        @each('components.item', $data, 'item')
    </ul>
@endsection

@section('footer')
    copyright 2020
@endsection