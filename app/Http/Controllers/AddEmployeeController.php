<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class AddEmployeeController extends Controller
{
    public function index()
    {
        return view('add');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'first' => 'required|string|max:20',
            'last' => 'required|string|max:20',
            'position' => 'required|string|max:20'
        ]);

        Employee::create([
            'first' => $request->get('first'),
            'last' => $request->get('last'),
            'position' => $request->get('position')
        ]);

        return back();
    }
}
