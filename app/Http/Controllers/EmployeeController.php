<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //

    public function create(Request $request)
    {
        $request->user()->checkIn();

        return redirect('/dashboard')->with('success', 'Checked in successfully');
    }
}
