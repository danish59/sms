<?php

namespace App\Http\Controllers;

use App\ClassRoutine_M;
use Illuminate\Http\Request;
use App\ManageSections_M;
use App\ManageSubjects_M;
use App\User;
use Validator;
use Auth;
use App\ManageClasses_M;
use Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;


class ClassRoutine_C extends Controller
{
    public function class_routine()
    {
        $campus_id = Auth::user()->campus_id;
        $allClasses = ManageClasses_M::all()->where('campus_id',$campus_id);

        $sections = DB::table('tbl_sections')
            ->select('tbl_sections.*','tbl_classes.class_name')
            ->join('tbl_classes', 'tbl_sections.class_id', '=', 'tbl_classes.id')
            ->join('tbl_campuses', 'tbl_classes.campus_id', '=', 'tbl_campuses.id')
            ->where('tbl_campuses.id',$campus_id)
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

        return view('institute_admin/manage_class_routine')->with(['allClasses'=>$allClasses,'classes'=>$classes,'sections'=>$sections]);

    }

    public function button_add_class_routine($section_id){
//        $section = ManageSections_M::findOrFail($id);
        $campus_id = Auth::user()->campus_id;

        $section = DB::table('tbl_sections')
            ->select('tbl_sections.*','tbl_classes.class_name')
            ->join('tbl_classes', 'tbl_sections.class_id', '=', 'tbl_classes.id')
            ->join('tbl_campuses', 'tbl_classes.campus_id', '=', 'tbl_campuses.id')
            ->where(['tbl_campuses.id'=>$campus_id,'tbl_sections.id'=>$section_id])
            ->get();

        $class_id = $section[0]->class_id;
        $teachers  = DB::table('tbl_employee')->select('id','emp_f_name','emp_m_name','emp_l_name')->where(['campus_id'=>$campus_id,'role'=>5])->get();
        $subjects  = DB::table('tbl_subjects')->where('class_id',$class_id)->get();

        $data['section'] = $section;
        $data['teachers'] = $teachers;
        $data['subjects'] = $subjects;
//        dd($data);
//        exit();
        return response()->json($data);
    }


    public function add_class_routine(Request $request){
        $validator = Validator::make($request->all(),[
            'section_id'=>'required',
            'day'=>'required',
            'select_teacher'=>'required',
            'select_subject'=>'required',
            'from_time_period'=>'required',
            'to_time_period'=>'required',
        ]);

        if ($validator->passes()) {
            $from_time_period = $request->input('from_time_period');
            $to_time_period = $request->input('to_time_period');
            $time_period = $from_time_period."-To-".$to_time_period;
            $campus_id = Auth::user()->campus_id;

            $class_routine = new ClassRoutine_M();
            $class_routine->section_id = $request->input('section_id');
            $class_routine->day = $request->input('day');
            $class_routine->teacher_id = $request->input('select_teacher');
            $class_routine->subject_id = $request->input('select_subject');
            $class_routine->time = $time_period;
            $class_routine->remember_token = $request->input('_token');
            $class_routine->save();

            return response(['success'=>'done']);
        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);

    }

    public function view_class_routine($section_id){
//        $section = ManageSections_M::findOrFail($id);
//        $campus_id = Auth::user()->campus_id;

        if ($section_id) {
            $view_class_routine = DB::table('tbl_class_routine')
                ->select('tbl_class_routine.*','tbl_classes.class_name','tbl_sections.section_name','tbl_subjects.subject_name','tbl_employee.emp_f_name','tbl_employee.emp_m_name','tbl_employee.emp_l_name')
                ->join('tbl_sections', 'tbl_class_routine.section_id', '=', 'tbl_sections.id')
                ->join('tbl_classes', 'tbl_sections.class_id', '=', 'tbl_classes.id')
                ->join('tbl_subjects', 'tbl_class_routine.subject_id', '=', 'tbl_subjects.id')
                ->join('tbl_employee', 'tbl_class_routine.teacher_id', '=', 'tbl_employee.id')
                ->where('tbl_class_routine.section_id',$section_id)
                ->get();

            return view('institute_admin/view_class_routine')->with(['view_class_routine'=>$view_class_routine]);


        }
        else  {
            $error = [
                '0'=>'something went wrong'
            ];
            return response()->json(['error'=>$error]);
        }
    }

    public function edit_class_routine($class_routine_id){
//        $section = ManageSections_M::findOrFail($id);
//        $campus_id = Auth::user()->campus_id;

        if ($class_routine_id) {
            $view_class_routine = DB::table('tbl_class_routine')
                ->select('tbl_class_routine.*','tbl_classes.class_name','tbl_classes.id as class_id','tbl_sections.section_name')
                ->join('tbl_sections', 'tbl_class_routine.section_id', '=', 'tbl_sections.id')
                ->join('tbl_classes', 'tbl_sections.class_id', '=', 'tbl_classes.id')
                ->where('tbl_class_routine.id',$class_routine_id)
                ->get();

           $campus_id = Auth::user()->campus_id;

            $class_id = $view_class_routine[0]->class_id;
            $teacher  = DB::table('tbl_employee')->select('id','emp_f_name','emp_m_name','emp_l_name')->where(['campus_id'=>$campus_id,'role'=>5])->get();
            $subjects  = DB::table('tbl_subjects')->where('class_id',$class_id)->get();

            $data['view_class_routine'] = $view_class_routine;
            $data['teachers'] = $teacher;
            $data['subjects'] = $subjects;

            return response()->json($data);
        }
        else  {
            $error = [
                '0'=>'something went wrong'
            ];
            return response()->json(['error'=>$error]);
        }
    }

    public function update_class_routine(Request $request){
        $validator = Validator::make($request->all(),[
            'section_id'=>'required',
            'day'=>'required',
            'select_teacher'=>'required',
            'select_subject'=>'required',
            'from_time_period'=>'required',
            'to_time_period'=>'required',
        ]);

        if ($validator->passes()) {
            $class_routine_id = $request->input('class_routine_id');
            $section_id = $request->input('section_id');
            $from_time_period = $request->input('from_time_period');
            $to_time_period = $request->input('to_time_period');
            $time_period = $from_time_period."-To-".$to_time_period;
            $campus_id = Auth::user()->campus_id;


            DB::table('tbl_class_routine')->where('id',$class_routine_id)
                ->update([
                    'day'=>$request->input('day'),
                    'teacher_id'=>$request->input('select_teacher'),
                    'subject_id'=>$request->input('select_subject'),
                    'time'=>$time_period,
                    'remember_token'=>$request->input('_token')
                ]);

            if ($section_id) {
                $view_class_routine = DB::table('tbl_class_routine')
                    ->select('tbl_class_routine.*','tbl_classes.class_name','tbl_sections.section_name','tbl_subjects.subject_name','tbl_employee.emp_f_name','tbl_employee.emp_m_name','tbl_employee.emp_l_name')
                    ->join('tbl_sections', 'tbl_class_routine.section_id', '=', 'tbl_sections.id')
                    ->join('tbl_classes', 'tbl_sections.class_id', '=', 'tbl_classes.id')
                    ->join('tbl_subjects', 'tbl_class_routine.subject_id', '=', 'tbl_subjects.id')
                    ->join('tbl_employee', 'tbl_class_routine.teacher_id', '=', 'tbl_employee.id')
                    ->where('tbl_class_routine.section_id',$section_id)
                    ->get();

                //dd($view_class_routine);

                return response()->json($view_class_routine);

            }
            else  {
                $error = [
                    '0'=>'something went wrong'
                ];
                return response()->json(['error'=>$error]);
            }
        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);

    }

    public function delete_class_routine($class_routine_id){
        if ($class_routine_id) {
            $section_id = DB::table('tbl_class_routine')->select('section_id')->where('id',$class_routine_id)->first();
            $section_id = $section_id->section_id;

            DB::table('tbl_class_routine')->where('id',$class_routine_id)->delete();
            if ($section_id) {
                $view_class_routine = DB::table('tbl_class_routine')
                    ->select('tbl_class_routine.*','tbl_classes.class_name','tbl_sections.section_name','tbl_subjects.subject_name','tbl_employee.emp_f_name','tbl_employee.emp_m_name','tbl_employee.emp_l_name')
                    ->join('tbl_sections', 'tbl_class_routine.section_id', '=', 'tbl_sections.id')
                    ->join('tbl_classes', 'tbl_sections.class_id', '=', 'tbl_classes.id')
                    ->join('tbl_subjects', 'tbl_class_routine.subject_id', '=', 'tbl_subjects.id')
                    ->join('tbl_employee', 'tbl_class_routine.teacher_id', '=', 'tbl_employee.id')
                    ->where('tbl_class_routine.section_id',$section_id)
                    ->get();
                return response()->json($view_class_routine);
            }
            else  {
                $error = [
                    '0'=>'something went wrong about section'
                ];
                return response()->json(['error'=>$error]);
            }
        }else{
          $error = [
            '0'=>'something went wrong'
           ];
           return response()->json(['error'=>$error]);
        }
    }

}
