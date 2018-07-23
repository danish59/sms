<?php

namespace App\Http\Controllers;

use App\Attendence_M;
use Illuminate\Http\Request;
use App\ManageSections_M;
use App\ManageSubjects_M;
use App\Result_M;
use App\User;
use Validator;
use Auth;
use App\ManageClasses_M;
use Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class TeacherHomeController extends Controller
{

    private $_attendance;
    public function __construct(Attendence_M $attendence_M)
    {
        $this->middleware('auth');
        $this->_attendance = $attendence_M;
    }
    public function index()
    {
        $campus_id = Auth::user()->campus_id;
        $teacher_id = Auth::user()->emp_std_id;

        $employee = DB::table('tbl_employee')
            ->select('tbl_campuses.campus_name','myschools.school_name','myschools.image','tbl_sections.section_name','tbl_classes.class_name','tbl_employee.section_id')
            ->join('tbl_campuses', 'tbl_employee.campus_id', '=', 'tbl_campuses.id')
            ->join('myschools', 'tbl_campuses.school_id', '=', 'myschools.id')
            ->join('tbl_sections', 'tbl_employee.section_id', '=', 'tbl_sections.id')
            ->join('tbl_classes', 'tbl_sections.class_id', '=', 'tbl_classes.id')
            ->where('tbl_employee.id',$teacher_id)
            ->first();
//        dd($employee);
//        exit();

        return view('institute_teacher/teacher_dashboard')->with(compact('employee',$employee));
    }

    /////////////////////////////Teacher View Class Routine////////////////////////////

    public function teacherView_class_routine($section_id){
        $campus_id = Auth::user()->campus_id;
        $teacher_id = Auth::user()->emp_std_id;

        $employee = DB::table('tbl_employee')
            ->select('tbl_campuses.campus_name','myschools.school_name','myschools.image','tbl_sections.section_name','tbl_classes.class_name','tbl_employee.section_id')
            ->join('tbl_campuses', 'tbl_employee.campus_id', '=', 'tbl_campuses.id')
            ->join('myschools', 'tbl_campuses.school_id', '=', 'myschools.id')
            ->join('tbl_sections', 'tbl_employee.section_id', '=', 'tbl_sections.id')
            ->join('tbl_classes', 'tbl_sections.class_id', '=', 'tbl_classes.id')
            ->where('tbl_employee.id',$teacher_id)
            ->first();


        if ($section_id) {
            $view_class_routine = DB::table('tbl_class_routine')
                ->select('tbl_class_routine.*','tbl_classes.class_name','tbl_sections.section_name','tbl_subjects.subject_name','tbl_employee.emp_f_name','tbl_employee.emp_m_name','tbl_employee.emp_l_name')
                ->join('tbl_sections', 'tbl_class_routine.section_id', '=', 'tbl_sections.id')
                ->join('tbl_classes', 'tbl_sections.class_id', '=', 'tbl_classes.id')
                ->join('tbl_subjects', 'tbl_class_routine.subject_id', '=', 'tbl_subjects.id')
                ->join('tbl_employee', 'tbl_class_routine.teacher_id', '=', 'tbl_employee.id')
                ->where('tbl_class_routine.section_id',$section_id)
                ->get();

//            dd($view_class_routine);
//            exit();
            return view('institute_teacher/teacherView_class_routine')->with(['employee'=>$employee,'view_class_routine'=>$view_class_routine]);


        }
        else  {
            $error = [
                '0'=>'something went wrong'
            ];
            return response()->json(['error'=>$error]);
        }
    }


    public function form_upload_result($section_id)
    {
////////////////////////////////////////////teacher_dashboard_data////////////////////
        $campus_id = Auth::user()->campus_id;
        $teacher_id = Auth::user()->emp_std_id;
        $employee = DB::table('tbl_employee')
            ->select('tbl_campuses.campus_name','myschools.school_name','myschools.image','tbl_sections.section_name','tbl_classes.class_name','tbl_employee.section_id')
            ->join('tbl_campuses', 'tbl_employee.campus_id', '=', 'tbl_campuses.id')
            ->join('myschools', 'tbl_campuses.school_id', '=', 'myschools.id')
            ->join('tbl_sections', 'tbl_employee.section_id', '=', 'tbl_sections.id')
            ->join('tbl_classes', 'tbl_sections.class_id', '=', 'tbl_classes.id')
            ->where('tbl_employee.id',$teacher_id)
            ->first();
//////////////////////////////////////////////////////////////////////////////////////

        $subjects = DB::table('tbl_subjects')->select('tbl_subjects.id as subject_id','tbl_subjects.subject_name')
            ->join('tbl_sections', 'tbl_subjects.class_id', '=', 'tbl_sections.class_id')
            ->where('tbl_sections.id',$section_id)
            ->get();

        $classes = ManageClasses_M::all()->where('campus_id',$campus_id);


        return view('institute_teacher/upload_result')->with(['employee'=>$employee, 'subjects'=>$subjects,'classes'=>$classes]);
    }

    public function ajax_form_upload_result(Request $request){
        $validator = Validator::make($request->all(),[
            'session_from'=>'required',
            'session_to'=>'required',
            'subject_name'=>'required',
            'select_exam'=>'required',
            'total_number'=>'required',
        ]);

        if ($validator->passes()) {
////////////////////////////////////////////teacher_dashboard_data////////////////////
            $campus_id = Auth::user()->campus_id;
            $teacher_id = Auth::user()->emp_std_id;
            $employee = DB::table('tbl_employee')
                ->select('tbl_campuses.campus_name','myschools.school_name','myschools.image','tbl_sections.section_name','tbl_classes.class_name','tbl_employee.section_id')
                ->join('tbl_campuses', 'tbl_employee.campus_id', '=', 'tbl_campuses.id')
                ->join('myschools', 'tbl_campuses.school_id', '=', 'myschools.id')
                ->join('tbl_sections', 'tbl_employee.section_id', '=', 'tbl_sections.id')
                ->join('tbl_classes', 'tbl_sections.class_id', '=', 'tbl_classes.id')
                ->where('tbl_employee.id',$teacher_id)
                ->first();
//////////////////////////////////////////////////////////////////////////////////////

            /////session concatnation
            $session_from = $request->input('session_from');
            $session_to = $request->input('session_to');
            $session = $session_from."-To-".$session_to;
            /////////////////////////
            $subject_name = $request->input('subject_name');
            $select_exam = $request->input('select_exam');
            $total_number = $request->input('total_number');

            $section_id = $employee->section_id;
            $class_students = DB::table('tbl_manage_students')->select('*')
                ->where(['section_id'=>$section_id,'session'=>$session])
                ->get();
            $data['session'] = $session;
            $data['subject_name'] = $subject_name;
            $data['select_exam'] = $select_exam;
            $data['total_number'] = $total_number;
            $data['class_students'] = $class_students;


            return response($data);
        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function upload_result(Request $request){
        $validator = Validator::make($request->all(),[
            'hidden_session'=>'required',
            'hidden_exam_type'=>'required',
            'hidden_name_subject'=>'required',
            'hidden_total_marks'=>'required',

        ]);

        if ($validator->passes()) {
            $campus_id = Auth::user()->campus_id;
            $teacher_id = Auth::user()->emp_std_id;

                $section_id = DB::table('tbl_employee')
                ->select('tbl_employee.section_id')
                ->where('tbl_employee.id',$teacher_id)
                ->first();

                $j_container = $request->input('j_container');
            for($j=1; $j<=$j_container; $j++){

                $hidden_name_subject=$request->input('hidden_name_subject');
                $hidden_exam_type=$request->input('hidden_exam_type');
                $hidden_total_marks=$request->input('hidden_total_marks');
                $hidden_session=$request->input('hidden_session');
                $roll_no=$request->input('roll_no'.$j);
                $student_name=$request->input('student_name'.$j);
                $father_name=$request->input('father_name'.$j);
                $obtained_marks=$request->input('obtained_marks'.$j);


                ////calculate grade
                $avg_marks=($obtained_marks*100)/$hidden_total_marks;

                if($avg_marks>90 && $avg_marks<=100)
                {
                    $grade="A+";
                }
                else if($avg_marks>80 && $avg_marks<=90)
                {
                    $grade="A";
                }
                else if($avg_marks>70 && $avg_marks<=80)
                {
                    $grade="B+";
                }
                else if($avg_marks>60 && $avg_marks<=70)
                {
                    $grade="B";
                }
                else if($avg_marks>50 && $avg_marks<=60)
                {
                    $grade="C";
                }
                else if($avg_marks>33 && $avg_marks<=50)
                {
                    $grade="D";
                }

                else
                {
                    $grade="E";
                }

                $insert_result = new Result_M();
                $insert_result->roll_no = $roll_no;
                $insert_result->section_id = $section_id->section_id;
                $insert_result->subject_id = $hidden_name_subject;
                $insert_result->std_name = $student_name;
                $insert_result->father_name = $father_name;
                $insert_result->obtained_marks = $obtained_marks;
                $insert_result->total_marks = $hidden_total_marks;
                $insert_result->grade = $grade;
                $insert_result->exam_type = $hidden_exam_type;
                $insert_result->session =$hidden_session ;
                $insert_result->remember_token = $request->input('_token');

                $insert_result->save();
//                exit();

            }

            return response(['success'=>'done']);
        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function view_result($section_id)
    {
////////////////////////////////////////////teacher_dashboard_data////////////////////
        $campus_id = Auth::user()->campus_id;
        $teacher_id = Auth::user()->emp_std_id;
        $employee = DB::table('tbl_employee')
            ->select('tbl_campuses.campus_name','myschools.school_name','myschools.image','tbl_sections.section_name','tbl_classes.class_name','tbl_employee.section_id')
            ->join('tbl_campuses', 'tbl_employee.campus_id', '=', 'tbl_campuses.id')
            ->join('myschools', 'tbl_campuses.school_id', '=', 'myschools.id')
            ->join('tbl_sections', 'tbl_employee.section_id', '=', 'tbl_sections.id')
            ->join('tbl_classes', 'tbl_sections.class_id', '=', 'tbl_classes.id')
            ->where('tbl_employee.id',$teacher_id)
            ->first();
//////////////////////////////////////////////////////////////////////////////////////

        $subjects = DB::table('tbl_subjects')->select('tbl_subjects.id as subject_id','tbl_subjects.subject_name')
            ->join('tbl_sections', 'tbl_subjects.class_id', '=', 'tbl_sections.class_id')
            ->where('tbl_sections.id',$section_id)
            ->get();

        $classes = ManageClasses_M::all()->where('campus_id',$campus_id);


        return view('institute_teacher/view_result')->with(['employee'=>$employee, 'subjects'=>$subjects,'classes'=>$classes]);
    }

    public function ajax_form_view_result(Request $request){
        $validator = Validator::make($request->all(),[
            'session_from'=>'required',
            'session_to'=>'required',
            'subject_name'=>'required',
            'select_exam'=>'required',
        ]);

        if ($validator->passes()) {
////////////////////////////////////////////teacher_dashboard_data////////////////////
//            $campus_id = Auth::user()->campus_id;
            $teacher_id = Auth::user()->emp_std_id;
            $employee = DB::table('tbl_employee')
                ->select('tbl_campuses.campus_name','myschools.school_name','myschools.image','tbl_sections.section_name','tbl_classes.class_name','tbl_employee.section_id')
                ->join('tbl_campuses', 'tbl_employee.campus_id', '=', 'tbl_campuses.id')
                ->join('myschools', 'tbl_campuses.school_id', '=', 'myschools.id')
                ->join('tbl_sections', 'tbl_employee.section_id', '=', 'tbl_sections.id')
                ->join('tbl_classes', 'tbl_sections.class_id', '=', 'tbl_classes.id')
                ->where('tbl_employee.id',$teacher_id)
                ->first();
//////////////////////////////////////////////////////////////////////////////////////

            /////session concatnation
            $session_from = $request->input('session_from');
            $session_to = $request->input('session_to');
            $session = $session_from."-To-".$session_to;
            /////////////////////////
            $subject_name = $request->input('subject_name');
            $select_exam = $request->input('select_exam');
//            $total_number = $request->input('total_number');

            $section_id = $employee->section_id;
            $class_students = DB::table('tbl_result')->select('*')
                ->where(['section_id'=>$section_id,'session'=>$session,'exam_type'=>$select_exam])
                ->get();
//            $data['session'] = $session;
//            $data['subject_name'] = $subject_name;
//            $data['select_exam'] = $select_exam;
//            $data['total_number'] = $total_number;
            $data['class_students'] = $class_students;


            return response($data);
        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function mark_attendance($section_id)
    {
////////////////////////////////////////////teacher_dashboard_data////////////////////
        $campus_id = Auth::user()->campus_id;
        $teacher_id = Auth::user()->emp_std_id;
        $employee = DB::table('tbl_employee')
            ->select('tbl_campuses.campus_name','myschools.school_name','myschools.image','tbl_sections.section_name','tbl_classes.class_name','tbl_employee.section_id')
            ->join('tbl_campuses', 'tbl_employee.campus_id', '=', 'tbl_campuses.id')
            ->join('myschools', 'tbl_campuses.school_id', '=', 'myschools.id')
            ->join('tbl_sections', 'tbl_employee.section_id', '=', 'tbl_sections.id')
            ->join('tbl_classes', 'tbl_sections.class_id', '=', 'tbl_classes.id')
            ->where('tbl_employee.id',$teacher_id)
            ->first();

        $class_students = DB::table('tbl_manage_students')->select('*')
            ->where(['section_id'=>$section_id])
            ->get();

//        $session = explode('-',$class_students->session);
//       dd($session);
//       exit();
        $DAY=date("D");
        $date= date('d/M/Y');

//        $date= date('d/M/Y', strtotime($class_students[0]->created_at));
//        dd($date);
        return view('institute_teacher/mark_attendance')->with(['employee'=>$employee, 'class_students'=>$class_students,'DAY'=>$DAY,'date'=>$date]);
    }

    public function upload_attendance(Request $request){
        $validator = Validator::make($request->all(),[
            'hidden_section_id'=>'required',
            'hidden_day'=>'required',
            'hidden_date'=>'required',
        ]);

        if ($validator->passes()) {

            $campus_id = Auth::user()->campus_id;
            $teacher_id = Auth::user()->emp_std_id;

            $section_id = DB::table('tbl_employee')
                ->select('tbl_employee.section_id')
                ->where('tbl_employee.id',$teacher_id)
                ->first();

            $hidden_date = $request->input('hidden_date');
            $class_students = $this->_attendance->findAttendence($section_id->section_id,$hidden_date);
//            echo "<pre>";
//            print_r($class_students);
//            exit();
            if ($class_students == "marked"){
                $error = ([
                    '0' =>'Attendance already Marked'
                ]);
                return response(['error'=>$error]);
            }
            else{
            $j_container = $request->input('j_container');
            for($j=1; $j<=$j_container; $j++){

                $roll_no = $request->input('roll_no'.$j);
                $student_name = $request->input('student_name'.$j);
                $father_name = $request->input('father_name'.$j);
                $status = $request->input('status'.$j);
                $hidden_day = $request->input('hidden_day');
                $hidden_date = $request->input('hidden_date');

//                $query_date = $class_students->date;
//                $date= date('d/M/Y');

                    $upload_attendance = new Attendence_M();
                    $upload_attendance->roll_no = $roll_no;
                    $upload_attendance->section_id = $section_id->section_id;
                    $upload_attendance->std_name = $student_name;
                    $upload_attendance->father_name = $father_name;
                    $upload_attendance->status = $status;
                    $upload_attendance->day_name = $hidden_day;
                    $upload_attendance->date = $hidden_date;
                    $upload_attendance->remember_token = $request->input('_token');
                    $upload_attendance->save();

                }
                return response(['success'=>'done']);
            }
        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function view_attendance($section_id)
    {
////////////////////////////////////////////teacher_dashboard_data////////////////////
        $campus_id = Auth::user()->campus_id;
        $teacher_id = Auth::user()->emp_std_id;
        $employee = DB::table('tbl_employee')
            ->select('tbl_campuses.campus_name','myschools.school_name','myschools.image','tbl_sections.section_name','tbl_classes.class_name','tbl_employee.section_id')
            ->join('tbl_campuses', 'tbl_employee.campus_id', '=', 'tbl_campuses.id')
            ->join('myschools', 'tbl_campuses.school_id', '=', 'myschools.id')
            ->join('tbl_sections', 'tbl_employee.section_id', '=', 'tbl_sections.id')
            ->join('tbl_classes', 'tbl_sections.class_id', '=', 'tbl_classes.id')
            ->where('tbl_employee.id',$teacher_id)
            ->first();
//////////////////////////////////////////////////////////////////////////////////////

        $classes = ManageClasses_M::all()->where('campus_id',$campus_id);

        return view('institute_teacher/view_attendance')->with(['employee'=>$employee,'classes'=>$classes]);
    }

    public function ajax_form_view_attendance(Request $request){
        $validator = Validator::make($request->all(),[
            'hidden_section_id'=>'required',
            'select_date'=>'required',
        ]);

        if ($validator->passes()) {
            $section_id = $request->input('hidden_section_id');

            $select_date = $request->input('select_date');
            $class_students = DB::table('tbl_attendence')->select('*')
                ->where(['section_id'=>$section_id,'date'=>$select_date])
                ->get();
            $data['class_students'] = $class_students;

            return response($data);
        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);
    }


}


