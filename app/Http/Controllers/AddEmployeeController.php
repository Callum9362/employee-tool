<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddEmployeeController extends Controller
{
    public function index()
    {
        return view('add');
    }
}
