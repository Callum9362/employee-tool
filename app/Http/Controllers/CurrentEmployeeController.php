<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class CurrentEmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('current')
        ->with('employees', $employees);
    }
}
