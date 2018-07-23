<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;


class AdminHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

//    public function index(){
//        return view("layouts/admin_dashboard_layout");
//    }
    public function index()
    {
        return view('institute_admin/admin-home');
    }
    public function admin_dashboard()
    {
        return view("institute_admin/admin_dashboard");
    }

 //    public function admin_general_components()
//    {
//        return view("admin_general_components");
//    }

}
