<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('index',['todos'=>$todos]);
    }

    public function add(TodoRequest $request)
    {
        $form = $request->all();
        Todo::create($form);
        redirect('/');
    }

    public function edit(TodoRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Todo::where('id',$request->id)->update($form);
        redirect('/');
    }

    public function delete(Request $request)
    {
        Todo::find($request->id)->delete;
        redirect('/');
    }
}
