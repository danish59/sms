<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     *bydefault after login route called the this homecontroller index method.
     *Route::get('/login', 'AdminHomeController@index');
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('institute_admin/admin-home');
    }


}
