<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class logInController extends Controller
{
    public function login(){
        return view('login');
    }

    public function login_check(Request $request){

        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);


        $credentials = $request->all();

        if (Auth::attempt($credentials)) {

            return redirect('/index');
        }
        else{
            return redirect('login')->with('error');
        }
    }
}
