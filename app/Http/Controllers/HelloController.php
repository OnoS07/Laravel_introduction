<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(){
        $message = ['msg' => '名前を入れてください',];
        return view('hello.index', $message);
    }

    public function post(Request $request){
        $name = $request -> msg; 
        $message = ['msg' => 'ようこそ' . $name . 'さん！'];

        return view('hello.index', $message);
    }
}
