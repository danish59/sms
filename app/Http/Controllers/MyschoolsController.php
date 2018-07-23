<?php

namespace App\Http\Controllers;
use App\MyschoolsModel;
use App\ManageCampuses_M;
use App\ApplyOnline_M;
use App\ProfileGallery_M;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Psy\Util\Str;
use Validator;
use Auth;
use Illuminate\Support\Facades\Session;


class MyschoolsController extends Controller
{
    public function index()
    {
        return view('auth.RegisterUser');
       // return view('school_reg');
    }

    public function schoolReg(Request $request){

//        $this->validate($request,[
//            'school_name'=>'required',
//            'reg_status'=>'required',
//            'reg_no'=>'required',
//            'abrevation'=>'required',
//            'reg_school_name'=>'required',
//            'board_name'=>'required',
//            'no_students'=>'required',
//            'no_teachers'=>'required',
//            'office'=>'required',
//            'tehsil'=>'required',
//            'distric'=>'required',
//            'country'=>'required',
//            'phone_office'=>'required',
//            'phone_home'=>'required',
//            'email'=>'required',
//            'owner_name'=>'required',
//            'owner_father'=>'required',
//            'owner_gender'=>'required',
//            'owner_cnic'=>'required',
//            'owner_cell'=>'required',
//            'principle_name'=>'required',
//            'principle_father'=>'required',
//            'principle_gender'=>'required',
//            'principle_cnic'=>'required',
//            'principle_cell'=>'required',
//            'school_level'=>'required',
//            //'level_education[]'=>'required',
//            'location'=>'required',
//            'build_status'=>'required',
//            'i_agree'=>'required'
//            ]);

        $myschools = new MyschoolsModel();
       $school_name = $request->input('school_name');
      //  $reg_status = $request->input('reg_status');
        $reg_no = $request->input('reg_no');
        $abrevation = $request->input('abrevation');
        $reg_school_name = $request->input('reg_school_name');
        $board_name = $request->input('board_name');
        $no_students = $request->input('no_students');
        $no_teachers = $request->input('no_teachers');
        $office = $request->input('office');
        $tehsil = $request->input('tehsil');
        $distric = $request->input('distric');
        $country = $request->input('country');
        $phone_office = $request->input('phone_office');
        $phone_home = $request->input('phone_home');
        $email = $request->input('email');
        $owner_name = $request->input('owner_name');
        $owner_father = $request->input('owner_father');
        $owner_gender = $request->input('owner_gender');
        $owner_cnic = $request->input('owner_cnic');
        $owner_cell = $request->input('owner_cell');
        $principle_name = $request->input('principle_name');
        $principle_father = $request->input('principle_father');
        $principle_gender = $request->input('principle_gender');
        $principle_cnic = $request->input('principle_cnic');
        $principle_cell = $request->input('principle_cell');
        $school_level = $request->input('school_level');
        $location = $request->input('location');
        $build_status = $request->input('build_status');
        $level_education = $request->input('level_education');
        $agree = $request->input('i_agree');
        $token = $request->input('_token');

         $address[] = array();
        $address[] = [$office,$tehsil,$distric,$country];
        $address = serialize($address);

        $level_education = serialize($level_education);

        $myschools->reg_no = $reg_no;
        $myschools->school_name = $school_name;
        $myschools->school_abrevation = $abrevation;
        $myschools->reg_school_name = $reg_school_name;
        $myschools->affiliation = $board_name;
        $myschools->total_students = $no_students;
        $myschools->total_teachers = $no_teachers;
        $myschools->address = $address;
        $myschools->phone_office = $phone_office;
        $myschools->phone_home = $phone_home;
        $myschools->email = $email;
        $myschools->owner_name = $owner_name;
        $myschools->owner_father_name = $owner_father;
        $myschools->owner_gender = $owner_gender;
        $myschools->owner_cnic = $owner_cnic;
        $myschools->owner_cell = $owner_cell;
        $myschools->principle_name= $principle_name;
        $myschools->principle_father_name = $principle_father;
        $myschools->principle_gender = $principle_gender;
        $myschools->principle_cnic = $principle_cnic;
        $myschools->principle_cell = $principle_cell;
        $myschools->school_level = $school_level;
        $myschools->location = $location;
        $myschools->building_status = $build_status;
        $myschools->level_education = $level_education;
        $myschools->agreement = $agree;

        $myschools->save();

        return view('auth.register');
    }

    public function search(){
        return view('search');
    }

    public function search_school(Request $request){

//        $keywords = Input::get('keywords');
//       $keywords = $request->input('keywords');
        $keywords = $request->term;
        $campuses = DB::table('tbl_campuses')->where('campus_name','LIKE','%'.$keywords.'%')->take(10)->get();
        $searchSchool = array();
        foreach ($campuses as $key => $campus){
                $searchSchool[] = ['id'=>$campus->id,'value'=>$campus->campus_name];
        }
//
//        dd($searchSchool);
//        exit();
//        $campusses = ManageCampuses_M::all();
//        $searchSchool = new \Illuminate\Database\Eloquent\Collection();
//        foreach ($campusses as $campus){
//            if (Str::contains(Str::lower($campus->campus_name),Str::lower($keywords))){
//                $searchSchool->add($campus);
//            }
//        }
        return response()->json($searchSchool);

    }

    public function school_profile(Request $request)
    {
        $campus_id = $request->input('campus_id');
//        $campus_id = 1;
        $campus = DB::table('tbl_campuses')->select('*')->where('id',$campus_id)->first();
        $school_id = $campus->school_id;
        $data['campus'] = $campus;
        $my_school = DB::table('myschools')->select('*')->where('id',$school_id)->first();
        $data['my_school'] = $my_school;
        $profile_gallery = DB::table('tbl_profile_gallery')->select('*')->where('campus_id',$campus_id)->first();
        $data['profile_gallery'] = $profile_gallery;
        return view("school_profile")->with(compact('data'));
    }

    public function profile_gallery($campus_id)
    {
        //$campus_id = Auth::user()->campus_id;
        $campus_id = $campus_id;
        $campus = DB::table('tbl_campuses')->select('*')->where('id',$campus_id)->first();
        $school_id = $campus->school_id;
        $data['campus'] = $campus;
        $my_school = DB::table('myschools')->select('*')->where('id',$school_id)->first();
        $data['my_school'] = $my_school;
        $profile_gallery = DB::table('tbl_profile_gallery')->select('*')->where('campus_id',$campus_id)->first();
        $data['profile_gallery'] = $profile_gallery;
        return view("profile_gallery")->with(compact('data'));
    }

    public function school_home($campus_id){

        $campus_id = $campus_id;
        $campus = DB::table('tbl_campuses')->select('*')->where('id',$campus_id)->first();
        $school_id = $campus->school_id;
        $data['campus'] = $campus;
        $my_school = DB::table('myschools')->select('*')->where('id',$school_id)->first();
        $data['my_school'] = $my_school;
        $profile_gallery = DB::table('tbl_profile_gallery')->select('*')->where('campus_id',$campus_id)->first();
        $data['profile_gallery'] = $profile_gallery;
        return view("school_profile")->with(compact('data'));
    }

    //////////////////////////////////////apply online////////////////////////

    public function admission_form($campus_id){
        $data['campus_id']=$campus_id;
        $campus_id = $campus_id;
        $campus = DB::table('tbl_campuses')->select('*')->where('id',$campus_id)->first();
        $school_id = $campus->school_id;
        $data['campus'] = $campus;
        $my_school = DB::table('myschools')->select('*')->where('id',$school_id)->first();
        $data['my_school'] = $my_school;

//        $sections = DB::table('tbl_sections')
//            ->select('tbl_sections.*','tbl_classes.class_name')
//            ->join('tbl_classes', 'tbl_sections.class_id', '=', 'tbl_classes.id')
//            ->join('tbl_campuses', 'tbl_classes.campus_id', '=', 'tbl_campuses.id')
//            ->where('tbl_campuses.id',$campus_id)
//            ->orderby('tbl_sections.class_id','ASC')
//            ->get();

        $classes = DB::table('tbl_classes')->select('*')->where('campus_id',$campus_id)->get();
        $data['classes']= $classes;


//        $profile_gallery = DB::table('tbl_profile_gallery')->select('*')->where('campus_id',$campus_id)->first();
//        $data['profile_gallery'] = $profile_gallery;
        return view("admission_form")->with(compact('data'));
    }

    public function submit_admission_form(Request $request){
        $validator = Validator::make($request->all(),['std_f_name'=>'required',
            'campus_id'=>'required',
            'std_f_name' =>'required',
            'std_l_name'=>'required',
            'std_cnic'=>'required',
            'father_name'=>'required',
            'father_cnic'=>'required',
            'date_birth'=>'required',
            'gender'=>'required',
            'religion'=>'required',
            'cast'=>'required',
            'std_image'=>'required',
            'std_email'=>'email|required',
            'std_phone'=>'required',
            'address'=>'required',
            'city'=>'required',
            'country'=>'required',
            'profession'=>'required',
            'class'=>'required',
            'group'=>'required',
            'hobbies'=>'required',
           ]);
        if ($validator->passes()){

            ///////image upload
            $std_image = time().'.'.$request->std_image->getClientOriginalName();
            $request->std_image->move(public_path('\images\std-images'), $std_image);


            $campus_id = $request->input('campus_id');;
            $campus = DB::table('tbl_campuses')->select('*')->where('id',$campus_id)->first();
            $school_id = $campus->school_id;
            $data['campus'] = $campus;
            $my_school = DB::table('myschools')->select('*')->where('id',$school_id)->first();
            $school_abrevation = $my_school->school_abrevation;

            $admission_no = rand(10,99999);
            $std_admission_no = $school_abrevation.time().$admission_no;

            $address = $request->input('address');
            $city = $request->input('city');
            $country = $request->input('country');

            $address = ['street'=>$address,'city'=>$city,'country'=>$country];
            $address = serialize($address);

            $submit_admission_form = new ApplyOnline_M();
            $submit_admission_form->campus_id = $request->input('campus_id');
            $submit_admission_form->std_admission_no = $std_admission_no;
            $submit_admission_form->std_f_name = $request->input('std_f_name');
            $submit_admission_form->std_l_name = $request->input('std_l_name');
            $submit_admission_form->std_cnic = $request->input('std_cnic');
            $submit_admission_form->father_name = $request->input('father_name');
            $submit_admission_form->father_cnic = $request->input('father_cnic');
            $submit_admission_form->date_birth = $request->input('date_birth');
            $submit_admission_form->gender = $request->input('gender');
            $submit_admission_form->religion = $request->input('religion');
            $submit_admission_form->cast = $request->input('cast');
            $submit_admission_form->std_image = $std_image;
            $submit_admission_form->std_email = $request->input('std_email');
            $submit_admission_form->std_phone = $request->input('std_phone');
            $submit_admission_form->profession = $request->input('profession');
            $submit_admission_form->class = $request->input('class');
            $submit_admission_form->group = $request->input('group');
            $submit_admission_form->hobbies = $request->input('hobbies');
            $submit_admission_form->address = $address;
            $submit_admission_form->remember_token = $request->input('_token');
            $submit_admission_form->save();

            $campus = DB::table('tbl_campuses')->select('*')->where('id',$campus_id)->first();
            $school_id = $campus->school_id;
            $data['campus'] = $campus;
            $my_school = DB::table('myschools')->select('*')->where('id',$school_id)->first();
            $data['my_school'] = $my_school;
            $session = Session::flash('admission_no','Your admission number is '.$std_admission_no);
            $data['flash_admission_no'] = $session;

            return view("admission_no")->with(compact('data'));


//            return redirect('/')->with(compact('session'));

//            return response()->json(['success'=>'done']);
        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);


    }

}
