<?php

namespace App\Http\Controllers;

use App\Models\My_class;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function students(){
        $students = User::all();
        return view('students',compact('students'));
    }
    public function classes(){
        $classes = My_class::all();
        return view('classes',compact('classes'));
    }

}
