<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request){
        $message = ['msg'=>'メッセージを送っています', 'id' => $request -> id];
        return view('hello.index', $message);
    }
}
