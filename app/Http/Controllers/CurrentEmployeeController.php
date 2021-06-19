<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrentEmployeeController extends Controller
{
    public function index()
    {
        return view('current');
    }
}
