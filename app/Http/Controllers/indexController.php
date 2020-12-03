<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{

    public function index(){
        $users = User::all();
        return view('index',['is_admin'=>compact('users')]);
    }

}
