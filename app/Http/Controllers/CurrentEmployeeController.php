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

    public function delete(Request $request)
    {
        $this->validate($request, [
            'userid' => 'required'
        ]);

        $userID = $request->get('userid');
        $response = Employee::destroy($userID);

        if($response)
        {
            return view('delete');
        }

    }
}
