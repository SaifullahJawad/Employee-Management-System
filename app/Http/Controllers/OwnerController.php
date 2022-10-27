<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OwnerController extends Controller
{
    public function index()
    {
        return view('owner.employees.report', [
            'reports' => Report::latest()->filter(request('day_id'))->get(),
            'days' => Day::latest('id')->get(),
            'currentDay' => Day::firstWhere('id', request('day_id'))
        ]);


    }
    public function create()
    {
        return view('owner.employees.create');
    }



    public function store()
    {

        $attributes = request()->validate([
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|confirmed|min:7|max:255'
        ]);

        $attributes['user_type'] = 'employee';

        /* 
            used mutator to encrypt the password
        */
        
        User::create($attributes);

        
        return redirect('/dashboard')->with('success', 'Employee Added');

    }


    public function show(User $employee)
    {
        return view('owner.employees.single-report', [
            'employee' => $employee
        ]);
    }
}
