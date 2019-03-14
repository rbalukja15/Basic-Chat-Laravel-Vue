<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Department;

class DepartmentsUserController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth');
    }

    public function index(){
        
        $user = User::all();

        return view('users/home', compact('user'));
    }

    public function show(Department $department){
        $users = User::where('department_id', $department->id)->get();
        return view('departments/show', compact('users', 'department'));
    }

    public function displayAll(Department $department){
        $users = User::where('department_id', $department->id);

        return view('users/showAllUsers', compact('users'));
    }
}
