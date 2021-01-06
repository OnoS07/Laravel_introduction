<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(){
        $items = ['one', 'two', 'three'];
        return view('hello.index', ['items' => $items]);
    }

    public function post(Request $request){
        return view('hello.index', ['msg' => $request->msg]);
    }
}
