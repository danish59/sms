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

class ManageClassSectionSubject_C extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function classes()
    {
        $campus_id = Auth::user()->campus_id;
        $classes = ManageClasses_M::all()->where('campus_id',$campus_id);
        return view('institute_admin/manage_classes')->with(compact('classes',$classes));

    }

    public function add_class(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'class_name'=>'required',
        ]);

        if ($validator->passes()) {
            $campus_id = Auth::user()->campus_id;
            $class = new ManageClasses_M();
            $class->campus_id = $campus_id;
            $class->class_name = $request->input('class_name');
            $class->remember_token = $request->input('_token');
            $class->save();

           // $classes =DB::table('tbl_classes')->select('*')->get();
         $classes = ManageClasses_M::all()->where('campus_id', $campus_id);

            return response($classes);
        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function edit_class($id){
        $class = ManageClasses_M::findOrFail($id);

        return response($class);

    }

    public function update_class(Request $request){
        $validator = Validator::make($request->all(),[
            'class_name'=>'required',
        ]);

        if ($validator->passes()) {
            $campus_id = Auth::user()->campus_id;

            $class_id = $request->input('class_id');
            DB::table('tbl_classes')->where(['campus_id'=>$campus_id,'id'=>$class_id])
                ->update(['class_name'=>$request->input('class_name'),
                    'remember_token'=>$request->input('_token')]);

            // $classes =DB::table('tbl_classes')->select('*')->get();
            $classes = ManageClasses_M::all()->where('campus_id', $campus_id);

            return response($classes);
        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function delete_class($class_id)
    {
        $campus_id = Auth::user()->campus_id;
        DB::table('tbl_classes')->where(['id'=>$class_id,'campus_id'=>$campus_id])->delete();
        $classes = ManageClasses_M::all()->where('campus_id', $campus_id);

        return response($classes);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////
    public function section()
    {
        $campus_id = Auth::user()->campus_id;
        $allClasses = ManageClasses_M::all()->where('campus_id',$campus_id);
//        $classes = ManageSections_M::all()->where('campus_id',$campus_id);

//        $classes = DB::table('tbl_sections')
//            ->select('tbl_sections.*','tbl_classes.class_name')
//            ->join('tbl_classes', 'tbl_sections.class_id', '=', 'tbl_classes.id')
//            ->join('tbl_campuses', 'tbl_classes.campus_id', '=', 'tbl_campuses.id')
//            ->where('tbl_campuses.id',$campus_id)
//            ->orderby('tbl_sections.class_id','ASC')
//            ->get();
////////////////////
//        $classes = DB::table('tbl_classes')
//            ->select('tbl_classes.id as class_id','tbl_classes.class_name')
////            ->join('tbl_sections', 'tbl_classes.id', '=', 'tbl_sections.class_id')
//            ->join('tbl_campuses', 'tbl_classes.campus_id', '=', 'tbl_campuses.id')
//            ->where('tbl_campuses.id',$campus_id)
//            ->orderby('tbl_classes.id','ASC')
//            ->get();
//
//        $class_id_array = array();
//        foreach ($classes as $class){
//            $class_id =$class->class_id;
//            $class_id_array[] = $class_id;
//        }
//
//        $sections = DB::table('tbl_sections')
//            ->select('tbl_sections.*')
////            ->join('tbl_sections', 'tbl_classes.id', '=', 'tbl_sections.class_id')
//            ->wherein('class_id',$class_id_array)
//            //->orderby('tbl_sections.class_id','ASC')
//            ->get();
////////////////////////

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

 /////////////////////////////////////
//        $sections = ManageClasses_M::with('sec')->where('campus_id',$campus_id)->get();
//        foreach ($sections as $class){
//
//            echo $class->class_name." >>>>>>>";
//            foreach ($class->sec as $sect){
//                echo  $sect->section_name." ";
//            }
//           echo "<br>";
//        }
/////////////////////

        return view('institute_admin/manage_sections')->with(['allClasses'=>$allClasses,'classes'=>$classes,'sections'=>$sections]);

    }
    public function add_section(Request $request){
        $validator = Validator::make($request->all(),[
            'class_name'=>'required',
            'section_name'=>'required'
        ]);

        if ($validator->passes()) {
            $campus_id = Auth::user()->campus_id;
            $class_id = $request->input('class_name');
            $class = new ManageSections_M();
            $class->class_id = $class_id;
            $class->section_name = $request->input('section_name');
            $class->remember_token = $request->input('_token');
            $class->save();

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

//            print_r($sections);
//            exit();

            return response(['classes'=>$classes,'sections'=>$sections]);
        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);

    }

    public function edit_section($id){
        $section = ManageSections_M::findOrFail($id);

        return response($section);

    }

    public function update_section(Request $request){
        $validator = Validator::make($request->all(),[
            'section_name'=>'required'
        ]);

        if ($validator->passes()) {
            $campus_id = Auth::user()->campus_id;
            $section_id = $request->input('section_id');
            $update_section = DB::table('tbl_sections')->where('id',$section_id)
                        ->update(['section_name'=>$request->input('section_name'),
                                    'remember_token'=>$request->input('_token')
                                ]);

            if ($update_section){
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

                return response(['classes'=>$classes,'sections'=>$sections]);

            }
            else
                return response()->json(['error'=>'something went wrong']);

        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);

    }

    public function delete_section($section_id){
        $campus_id = Auth::user()->campus_id;
        $section_delete = DB::table('tbl_sections')->where('id',$section_id)->delete();

        if ($section_delete){
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

            return response(['classes'=>$classes,'sections'=>$sections]);

        }
        else
            return response()->json(['error'=>'something went wrong']);

    }

//////////////////////////////////////////////managaege subjects

   public function subjects(){
       $campus_id = Auth::user()->campus_id;
       $allClasses = ManageClasses_M::all()->where('campus_id',$campus_id);

       $subjects = DB::table('tbl_subjects')
           ->select('tbl_subjects.*','tbl_classes.class_name')
           ->join('tbl_classes', 'tbl_subjects.class_id', '=', 'tbl_classes.id')
           ->join('tbl_campuses', 'tbl_classes.campus_id', '=', 'tbl_campuses.id')
           ->where('tbl_campuses.id',$campus_id)
           ->orderby('tbl_subjects.class_id','ASC')
           ->get();

       $class_id_array = array();
       foreach ($subjects as $sub){
           $class_id =$sub->class_id;
           $class_id_array[] = $class_id;
       }

       $classes = DB::table('tbl_classes')
           ->select('id as class_id','class_name')
           ->wherein('id',$class_id_array)
           ->get();

       return view('institute_admin/manage_subjects')->with(['allClasses'=>$allClasses,'classes'=>$classes,'subjects'=>$subjects]);

   }

    public function add_subject(Request $request){
        $validator = Validator::make($request->all(),[
            'class_name'=>'required',
            'subject_name'=>'required'
        ]);

        if ($validator->passes()) {
            $campus_id = Auth::user()->campus_id;
            $class_id = $request->input('class_name');
            $class = new ManageSubjects_M();
            $class->class_id = $class_id;
            $class->subject_name = $request->input('subject_name');
            $class->remember_token = $request->input('_token');
            $class->save();

            $subjects = DB::table('tbl_subjects')
                ->select('tbl_subjects.*','tbl_classes.class_name')
                ->join('tbl_classes', 'tbl_subjects.class_id', '=', 'tbl_classes.id')
                ->join('tbl_campuses', 'tbl_classes.campus_id', '=', 'tbl_campuses.id')
                ->where('tbl_campuses.id',$campus_id)
                ->orderby('tbl_subjects.class_id','ASC')
                ->get();

            $class_id_array = array();
            foreach ($subjects as $sub){
                $class_id =$sub->class_id;
                $class_id_array[] = $class_id;
            }

            $classes = DB::table('tbl_classes')
                ->select('id as class_id','class_name')
                ->wherein('id',$class_id_array)
                ->get();
            return response(['classes'=>$classes,'subjects'=>$subjects]);
        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);

    }

    public function edit_subject($id){
        $subject = ManageSubjects_M::findOrFail($id);

        return response($subject);

    }

    public function update_subject(Request $request){
        $validator = Validator::make($request->all(),[
            'subject_name'=>'required'
        ]);

        if ($validator->passes()) {
            $campus_id = Auth::user()->campus_id;
            $subject_id = $request->input('subject_id');
            $update_subject = DB::table('tbl_subjects')->where('id',$subject_id)
                ->update(['subject_name'=>$request->input('subject_name'),
                    'remember_token'=>$request->input('_token')
                ]);

            if ($update_subject){
                $subjects = DB::table('tbl_subjects')
                    ->select('tbl_subjects.*','tbl_classes.class_name')
                    ->join('tbl_classes', 'tbl_subjects.class_id', '=', 'tbl_classes.id')
                    ->join('tbl_campuses', 'tbl_classes.campus_id', '=', 'tbl_campuses.id')
                    ->where('tbl_campuses.id',$campus_id)
                    ->orderby('tbl_subjects.class_id','ASC')
                    ->get();

                $class_id_array = array();
                foreach ($subjects as $sub){
                    $class_id =$sub->class_id;
                    $class_id_array[] = $class_id;
                }

                $classes = DB::table('tbl_classes')
                    ->select('id as class_id','class_name')
                    ->wherein('id',$class_id_array)
                    ->get();
                return response(['classes'=>$classes,'subjects'=>$subjects]);
            }
            else
                return response()->json(['error'=>'something went wrong']);

        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);

    }

    public function delete_subject($subject_id){
        $campus_id = Auth::user()->campus_id;
        $subject_delete = DB::table('tbl_subjects')->where('id',$subject_id)->delete();

        if ($subject_delete){
            $subjects = DB::table('tbl_subjects')
                ->select('tbl_subjects.*','tbl_classes.class_name')
                ->join('tbl_classes', 'tbl_subjects.class_id', '=', 'tbl_classes.id')
                ->join('tbl_campuses', 'tbl_classes.campus_id', '=', 'tbl_campuses.id')
                ->where('tbl_campuses.id',$campus_id)
                ->orderby('tbl_subjects.class_id','ASC')
                ->get();

            $class_id_array = array();
            foreach ($subjects as $sub){
                $class_id =$sub->class_id;
                $class_id_array[] = $class_id;
            }

            $classes = DB::table('tbl_classes')
                ->select('id as class_id','class_name')
                ->wherein('id',$class_id_array)
                ->get();
            return response(['classes'=>$classes,'subjects'=>$subjects]);

        }
        else
            return response()->json(['error'=>'something went wrong']);

    }




}
