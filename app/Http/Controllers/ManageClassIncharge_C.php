<?php

namespace App\Http\Controllers;

use App\ManageSections_M;
use App\ManageSubjects_M;
use App\User;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\ManageClasses_M;
use Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class ManageClassIncharge_C extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function class_incharge(){

        $campus_id = Auth::user()->campus_id;
        $allClasses = ManageClasses_M::all()->where('campus_id',$campus_id);

        $sections = DB::table('tbl_sections')
            ->select('tbl_sections.*','tbl_classes.class_name','tbl_employee.id as teacher_id', 'tbl_employee.emp_f_name','tbl_employee.emp_m_name','tbl_employee.emp_l_name')
            ->join('tbl_classes', 'tbl_sections.class_id', '=', 'tbl_classes.id')
            ->join('tbl_campuses', 'tbl_classes.campus_id', '=', 'tbl_campuses.id')
            ->join('tbl_employee', 'tbl_sections.id', '=', 'tbl_employee.section_id')
            ->where(['tbl_campuses.id'=>$campus_id, 'tbl_employee.role'=>5])
            ->orderby('tbl_sections.class_id','ASC')
            ->get();

        $class_id_array = array();
        foreach ($sections as $sec){
            $class_id =$sec->class_id;
            $class_id_array[] = $class_id;
        }

        $classes = DB::table('tbl_classes')
            ->select('id as class_id','class_name')
            ->wherein('id',$class_id_array)
            //->orderby('tbl_classes.id','ASC')
            ->get();

        return view('institute_admin/class_incharge')->with(['allClasses'=>$allClasses,'classes'=>$classes,'sections'=>$sections]);

    }

    public function view_add_class_incharge_form(){
        $campus_id = Auth::user()->campus_id;
        $classes = ManageClasses_M::all()->where('campus_id',$campus_id);
        return view('institute_admin/add_class_incharge')->with(compact('classes',$classes));
    }

    public function next_add_incharge(Request $request){
        $validator = Validator::make($request->all(),[
            'class_name'=>'required',
            ]);

        if ($validator->passes()) {
            $campus_id = Auth::user()->campus_id;
            /////session concatnation

            $class_id = $request->input('class_name');

            $sections_assigned = DB::table('tbl_employee')
                ->select('id','section_id')
                ->where(['campus_id'=>$campus_id, 'role'=>5])->where('section_id', '<>',0)
                ->get();

            $section_id_array = array();
            foreach ($sections_assigned as $sec){
                $section =$sec->section_id;
                $section_id_array[] = $section;
            }


            $sections = DB::table('tbl_sections')
                ->where(['class_id'=>$class_id])->whereNotIn('id',$section_id_array)
                ->get();

           $teachers = DB::table('tbl_employee')
               ->select('id','emp_f_name','emp_m_name','emp_l_name')
               ->where(['campus_id'=>$campus_id, 'role'=>5, 'section_id'=>0])
               ->get();

            $data['class_id'] = $class_id;
            $data['sections'] = $sections;
            $data['teachers'] = $teachers;

//dd($data);
//exit();

            return response($data);
        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function assign_incharge(Request $request){
        $validator = Validator::make($request->all(),[
            'class_id'=>'required',
            'select_section'=>'required',
            'select_teacher'=>'required',
        ]);

        if ($validator->passes()) {
            $campus_id = Auth::user()->campus_id;
            /////session concatnation
            $class_id = $request->input('class_id');
            $select_section = $request->input('select_section');
            $select_teacher = $request->input('select_teacher');

            /////////////////////////
            DB::table('tbl_employee')
                ->where(['id'=>$select_teacher, 'campus_id'=>$campus_id])
                ->update(['section_id'=>$select_section]);

                        return response(['success'=>'done']);
        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function delete_incharge($teacher_id){

        if ($teacher_id) {
            $campus_id = Auth::user()->campus_id;
            /////////////////////////
            DB::table('tbl_employee')
                ->where(['id'=>$teacher_id, 'campus_id'=>$campus_id])
                ->update(['section_id'=>0]);

            return response(['success'=>'done']);
        }
        else{
            $error[]= array([
               '0' => 'something went wrong'
            ]);
            return response()->json(['error'=>$error]);
        }

    }


}
