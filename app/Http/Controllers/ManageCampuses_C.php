<?php

namespace App\Http\Controllers;

use App\ManageCampuses_M;
use App\ManageEmp_M;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Auth;

class ManageCampuses_C extends Controller
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
        $campuses = DB::table('tbl_campuses')
            ->select('tbl_campuses.*','tbl_employee.emp_f_name','tbl_employee.emp_m_name','tbl_employee.emp_l_name','tbl_employee.father_name')
            ->join('tbl_employee', 'tbl_campuses.principle_id', '=', 'tbl_employee.id')
            ->get();

        $principles = DB::table('tbl_employee')->where(['role'=>3,'user_account'=>1])
                                ->select(['id','emp_f_name','emp_m_name','emp_l_name','father_name'])->get();

        return view("institute_admin/manage_campuses")->with(['campuses'=>$campuses,'principles'=>$principles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_campus(Request $request)
    {
        $validator = Validator::make($request->all(),['campus_name'=>'required','street'=>'required','city'=>'required','country'=>'required','principle'=>'required','phone_office'=>'required','email'=>'email|required']);

        if ($validator->passes()){
        $campus_id = Auth::user()->campus_id;
        $school_id = DB::table('tbl_campuses')->where('id',$campus_id)->value('school_id');

        $street = $request->input('street');
        $city = $request->input('city');
        $country = $request->input('country');

        $address = ['street'=>$street,'city'=>$city,'country'=>$country];
        $address = serialize($address);

        $addcampus = new ManageCampuses_M();
        $addcampus->school_id = $school_id;
        //$addcampus->campus_code =$campus_code;
        $addcampus->campus_name = $request->input('campus_name');
        $addcampus->principle_id = $request->input('principle');;//$request->principle;
        $addcampus->address = $address;
        $addcampus->phone_office = $request->input('phone_office');
        $addcampus->email = $request->input('email');
        $addcampus->remember_token = $request->input('_token');

//        dd($addcampus);
//        exit();
        $addcampus->save();
            return response()->json(['success'=>'done']);
        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);

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
    public function edit_campus($id)
    {
        $campus = DB::table('tbl_campuses')
            ->select('tbl_campuses.*','tbl_employee.emp_f_name','tbl_employee.emp_m_name','tbl_employee.emp_l_name','tbl_employee.father_name')
            ->join('tbl_employee', 'tbl_campuses.principle_id', '=', 'tbl_employee.id')
            ->where('tbl_campuses.id',$id)
            ->first();

        $principles = DB::table('tbl_employee')->where(['role'=>4,'user_account'=>1])
            ->select(['id','emp_f_name','emp_m_name','emp_l_name','father_name'])->get();

        return view("institute_admin/edit_campus")->with(['campus'=>$campus,'principles'=>$principles]);

       //return response()->json($campus);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_campus(Request $request)
    {
        $validator = Validator::make($request->all(),['campus_name'=>'required','street'=>'required','city'=>'required','country'=>'required','principle'=>'required','phone_office'=>'required','email'=>'email|required']);

        if ($validator->passes()){
            $campus_id = $request->input('campus_id');
            $school_id = $request->input('school_id');

            $street = $request->input('street');
            $city = $request->input('city');
            $country = $request->input('country');

            $addres = ['street'=>$street,'city'=>$city,'country'=>$country];
            $addr = serialize($addres);

            $campus_name = $request->input('campus_name');
            $principle_id = $request->input('principle');;//$request->principle;
            $address = $addr;
            $phone_office = $request->input('phone_office');
            $email = $request->input('email');
            $remember_token = $request->input('_token');

            DB::table('tbl_campuses')->where(['id'=>$campus_id,'school_id'=>$school_id])
                                    ->update(['campus_name'=>$campus_name,
                                        'principle_id'=>$principle_id,
                                        'address'=>$address,
                                        'phone_office'=>$phone_office,
                                        'email'=>$email,
                                        'remember_token'=>$remember_token]);

            return response()->json(['success'=>'done']);
        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_campus($campus_id)
    {
        DB::table('tbl_campuses')->where('id',$campus_id)->delete();
        return response()->json(['success'=>'done']);
    }
}
