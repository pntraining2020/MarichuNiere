<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function display()
    {
        $names = User::all();
        
        // dd($names);
        return view('welcome', compact('names'));
    }
}
