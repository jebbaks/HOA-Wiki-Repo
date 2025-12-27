<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request) {
        return view('register');
    }
    
    public function store(Request $request) {
        $validated = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        
        User::create($validated);
        return redirect()->route('home');
    }
}

