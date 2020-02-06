<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class TimeController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }

    public function start(Request $request)
    {   
        $times = date('Y-m-d H:i:s');
            return view('welcome', compact('times'));
    }
}
