<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MemberRequest;
use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('index',['members'=>$members]);
    }

    public function add(MemberRequest $request)
    {
        $form = $request->all();
        Member::create($form);
        $members = Member::all();
        return redirect('/');
    }

    public function edit(Request $request)
    {
        $form = $request -> all(); 
        unset($form['_token']);
        Member::where('id',$request->id)->update($form);
        return redirect('/');
    }
}
