<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Department;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // if(Auth::user()->isAdmin == 0){
        //     return view('users/homse');
        // }

        $departments = Department::all();

        return view('home', compact('departments'));
    }
}
