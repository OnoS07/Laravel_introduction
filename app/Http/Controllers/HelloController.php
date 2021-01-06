<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(){
        $data = [
            ['name' => 'yamada', 'mail' => 'softbank'],
            ['name' => 'sato', 'mail' => 'au'],
            ['name' => 'suzuki', 'mail' => 'docomo']
        ];
        return view('hello.index', ['data' => $data]);
    }

    public function post(Request $request){
        return view('hello.index', ['msg' => $request->msg]);
    }
}
