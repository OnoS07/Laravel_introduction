<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\HelloRequest;
use App\Models\Person;


class HelloController extends Controller
{
    public function getAuth(Request $request){
        $message = ['message' => 'ログインしてください'];
        return view('hello.auth', $message);
    }

    public function postAuth(Request $request){
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            $msg = 'ログインしました';
        }else{
            $msg = 'ログインに失敗しました';
        }
        return view('hello.auth', ['message'=>$msg]);
    }

    public function index(Request $request){
        $user = Auth::user();

        $items = Person::all();
        return view('hello.index', ['items' => $items, 'user'=>$user]);
    }

    public function show(Request $request){
        $id = $request->id;
        $items = DB::table('people')->where('id', '<=', $id)->get();

        return view('hello.show', ['items' => $items]);
    }

    public function post(Request $request){
        $items = DB::select('SELECT * FROM people');
        return view('hello.index', ['items' => $items]);
    }

    public function add(Request $request){
        return view('hello.add');
    }

    public function create(Request $request){
        $params = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];

        DB::table('people')->insert($params);
        return redirect('/hello');
    }

     public function edit(Request $request){
         $item = DB::table('people')->where('id', $request->id)->first();

         return view('hello.edit', ['form' => $item]);
     }

     public function update(Request $request){
        $params = [
            'id' => $request -> id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];

        DB::table('people')->where('id', $request->id)->update($params);
        return redirect('/hello');
     }

     public function del(Request $request){
        $item = DB::table('people')->where('id', $request->id)->first();

        return view('hello.del', ['form' => $item]);
     }

     public function remove(Request $request){
         DB::table('people')->where('id', $request->id)->delete();

         return redirect('/hello');
     }
}