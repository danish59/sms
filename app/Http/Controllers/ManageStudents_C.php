<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Validator;
use Auth;
use App\ManageStudents_M;
use App\ManageClasses_M;
use App\ApplyOnline_M;
use App\ManageCampuses_M;
use App\MyschoolsModel;
use App\Registration_M;
use App\StudentAdmissionFee_M;
use App\User;
use Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ManageStudents_C extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function manage_students(){
        $campus_id = Auth::user()->campus_id;
        $classes = ManageClasses_M::all()->where('campus_id',$campus_id);
//        dd($classes);
//        exit();
        return view('institute_admin/manage_students')->with(compact('classes',$classes));
    }

    public function count_students(Request $request){
        $validator = Validator::make($request->all(),[
            'class_name'=>'required',
            'session_from'=>'required',
            'session_to'=>'required',
        ]);

        if ($validator->passes()) {
            $campus_id = Auth::user()->campus_id;
            /////session concatnation
            $session_from = $request->input('session_from');
            $session_to = $request->input('session_to');
            $session = $session_from."-To-".$session_to;
            /////////////////////////


            $class_id = $request->input('class_name');
            $count_students = DB::table('tbl_registration')
                ->where(['class_id'=>$class_id,'campus_id'=>$campus_id,'session'=>$session])
                ->get();
            $count = $count_students->count();
            $sections = DB::table('tbl_sections')
                ->where(['class_id'=>$class_id])
                ->get();

            $data['class_id'] = $class_id;
            $data['session'] = $session;
            $data['count'] = $count;
            $data['sections'] = $sections;

//dd($sections);
//exit();

            return response($data);
        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function assign_section(Request $request){
        $validator = Validator::make($request->all(),[
            'class_id'=>'required',
            'session'=>'required',
            'number_of_students'=>'required',
            'select_section'=>'required',
            'from_num_students'=>'required',
            'to_num_students'=>'required',
        ]);

        if ($validator->passes()) {
            $campus_id = Auth::user()->campus_id;
            /////session concatnation
            $class_id = $request->input('class_id');
            $session = $request->input('session');
            $number_of_students = $request->input('number_of_students');
            $select_section = $request->input('select_section');
            $from_num_students = $request->input('from_num_students');
            $to_num_students = $request->input('to_num_students');

            /////////////////////////
            $get_students = DB::table('tbl_registration')->select('registration_id','class_id','std_f_name','std_m_name','std_l_name','father_name')
                ->where(['class_id'=>$class_id,'campus_id'=>$campus_id,'session'=>$session])
                ->get();

            $i = 0;
            $roll_no=0;
            foreach ($get_students as $get_std)
            {
                $i++;
                if($i>=$from_num_students && $i<=$to_num_students)
                {
                    $roll_no++;

                    $registration_id = $get_std->registration_id;
                    $student_f_name = $get_std->std_f_name;
                    $student_m_name = $get_std->std_m_name;
                    $student_l_name = $get_std->std_l_name;
                    $father_name = $get_std->father_name;

                    if ($student_m_name = null){
                        $student_m_name = "";
                    }
                    $student_name = $student_f_name.' '.$student_m_name.' '.$student_l_name;

                    $assign_roll_num = new ManageStudents_M();
                    $assign_roll_num->registration_id= $registration_id;
                    $assign_roll_num->roll_no= $roll_no;
                    $assign_roll_num->section_id= $select_section;
                    $assign_roll_num->std_name = $student_name;
                    $assign_roll_num->father_name = $father_name;
                    $assign_roll_num->session = $session;
                    $assign_roll_num->remember_token = $request->input('_token');
                    $assign_roll_num->save();


                }
            }

            return response(['success'=>'done']);
        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);
    }
}
