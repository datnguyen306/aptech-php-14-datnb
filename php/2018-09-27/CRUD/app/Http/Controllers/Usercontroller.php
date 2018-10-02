<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    function hienthi(){
        $users= User::all();
        return view('welcome',['users'=>$users]);
    }
}
