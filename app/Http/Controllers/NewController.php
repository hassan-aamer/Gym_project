<?php

namespace App\Http\Controllers;
use App\Models\contact;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function home(){
        return view('home');
    }

    public function gym(){
        return view('gym');
    }

    public function groups(){

        return view('groups');
    }

    public function news(){
        return view('news');
    }
    public function contact(){
        // ----------delete (id)-----------

        // $id=2;
        // $q=contact::find($id);
        // $q->delete();

        // ------------delete email or name or all------------
        // $q=contact::where('email','omar@gmail.com')->delete();



        // -------------update------------
        // $q=contact::where('email','hassanaamer@gmail.com')->update(['phone'=>'01030156725']);

        return view('contact');
    }

    public function supplements(){
        return view('supplements');
    }
    public function add(Request $request ){
        contact::create($request->all());
        return redirect(to:'contact');
    }
}
