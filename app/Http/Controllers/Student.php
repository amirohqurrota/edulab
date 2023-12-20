<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student extends Controller
{
    public function index()
    {
        return view('students');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
