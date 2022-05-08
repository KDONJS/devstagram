<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //dd($request);
        //dd($request->get('user-name'));

        //validación

        $this->validate($request,[
            'name'=>'required|max:30',
            'unser_name'=>'required|unique:user|min:3|max:20',
            'email'=>'required|unique:user|email|max:60',
            'password'=>'required'
        ]);

    }

}
