<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;


class PersonController extends Controller
{
    public function index(Request $request){
        $items = Person::all();
        return view ('person.index', ['items' => $items ]);
    }

    public function find(Request $request){
        return view('person.find', ['input' => '']);
    }

    public function search(Request $request){
        $item = Person::nameEqual($request->input)->first();
        $params = ['input' => $request->input, 'item' => $item];
        return view('person.find', $params);
    }

    public function add(Request $request){
        return view('person.add');
    }

    public function create(Request $request){
        $this->validate($request, Person::$rules);
        $person = New Person;
        $form = $request->all();
        unset($form['_token']);
        $person -> fill($form) -> save();

        return redirect('/person');
    }

    public function edit(Request $request){
        $person = Person::find($request->id);
        return view('person.edit', ['form'=>$person]);
    }

    public function update(Request $request){
        $this->validate($request, Person::$rules);
        $person = Person::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $person -> fill($form) -> save();

        return redirect('/person');
    }

    public function del(Request $request){
        $person = Person::find($request->id);
        return view('person.del', ['form'=>$person]);
    }

    public function remove (Request $request){
        $person = Person::find($request->id)->delete();
        return redirect('/person');
    }
}
