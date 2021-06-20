<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Support\Facades\DB;

class MoreDetailsController extends Controller
{
    public function index($userID)
    {
        $employee = Employee::find($userID);
        return view('details')->with('employee', $employee);
    }
}
