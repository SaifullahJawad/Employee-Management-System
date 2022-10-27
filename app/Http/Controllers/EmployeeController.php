<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //

    public function checkIn(Request $request)
    {
        $request->user()->checkIn();

        return redirect('/dashboard')->with('success', 'Checked in successfully');
    }

    public function checkOut(Request $request)
    {
        $request->user()->checkOut();

        return redirect('/dashboard')->with('success', 'Checked out successfully');
    }
}
