<?php

namespace App\Http\Controllers;

use App\Models\Management\ManagementTable;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('login');
    }
    public function index(Request $request){
        return view('admin/dashboard');
    }
    public function management_bases(Request $request){
        $management_table = ManagementTable::all();
        return view('admin/management_bases' , compact('management_table'));
    }
}
