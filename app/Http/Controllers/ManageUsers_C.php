<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;
use Response;
//use Illuminate\Support\Facades\Crypt;
//use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\DB;
//use Illuminate\Contracts\Encryption\DecryptException;

class ManageUsers_C extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function manage_teacher_users(){

        $campus_id = Auth::user()->campus_id;
//        $allClasses = ManageClasses_M::all()->where('campus_id',$campus_id);

        $teacher_users = DB::table('users')
            ->select('users.*','tbl_employee.emp_f_name','tbl_employee.emp_m_name','tbl_employee.emp_l_name')
            ->join('tbl_employee', 'users.emp_std_id', '=', 'tbl_employee.id')
            ->where(['users.campus_id'=>$campus_id, 'role_id'=>5])
            ->get();

        $teacher_users_array = array();
        foreach ($teacher_users as $t_users){
            $emp_f_name = $t_users->emp_f_name;
            $emp_m_name = $t_users->emp_m_name;
            $emp_l_name = $t_users->emp_l_name;
            $email = $t_users->email;
            $password = $t_users->password;
            $emp_f_name = $t_users->emp_f_name;


//            $pass = decrypt($password);
//            $encryption_key = $password;
//            $cryptor = new Cryptor($encryption_key);
//            $decrypted_token = $cryptor->decrypt($crypted_token);
//            try {
//
//                $pass = decrypt($password);
//                $teacher_users_array = $pass;
//            } catch (DecryptException $e) {
//                //
//            }


        }

//        dd($pass);
//        exit();
//        $classes = DB::table('tbl_classes')
//            ->select('id as class_id','class_name')
//            ->wherein('id',$class_id_array)
//            //->orderby('tbl_classes.id','ASC')
//            ->get();

        return view('institute_admin/users_teachers')->with(['teacher_users'=>$teacher_users]);
    }


}
