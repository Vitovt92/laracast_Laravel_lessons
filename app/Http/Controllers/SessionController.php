<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{

    public function create(){
        return view('session.create');
    }

    public function store(){

    }

    public function destroy(){
        Auth::logout();

        return redirect('/')->with('success', 'Goodby!');
    }
}
