<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('login');
    }
    public function index(Request $request){
        return view('admin/Dashboard');
    }
}
