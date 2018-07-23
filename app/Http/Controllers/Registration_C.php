<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Validator;
use Auth;
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


class Registration_C extends Controller
{
    public function new_admission()
    {
        return view('institute_admin/new_admission');
    }

    public function search_student(Request $request){
        $validator = Validator::make($request->all(),[
            'adm_num'=>'required',
        ]);

        if ($validator->passes()) {
            $campus_id = Auth::user()->campus_id;

            $adm_num = $request->input('adm_num');
            $searched_student = DB::table('tbl_admission')
                ->select('tbl_admission.*','tbl_fee_structure.*','tbl_classes.class_name')
                ->join('tbl_classes', 'tbl_admission.class', '=', 'tbl_classes.id')
                ->join('tbl_fee_structure', 'tbl_admission.class', '=', 'tbl_fee_structure.class_id')
                ->where(['tbl_admission.std_admission_no'=>$adm_num,'tbl_admission.campus_id'=>$campus_id])
                ->get();
            if($searched_student->isNotEmpty()){
                $searched_student[0]->address = unserialize($searched_student[0]->address);
            }
            return response($searched_student);
        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function new_registration(Request $request){
        $validator = Validator::make($request->all(),[
            'session_from'=>'required',
            'session_to'=>'required',
        ]);
        if ($validator->passes()){
            $campus_id = Auth::user()->campus_id;
            $campus = DB::table('tbl_campuses')->select('*')->where('id',$campus_id)->first();
            $school_id = $campus->school_id;
            $data['campus'] = $campus;
            $my_school = DB::table('myschools')->select('*')->where('id',$school_id)->first();
            $school_abrevation = $my_school->school_abrevation;

            $student_cnic = $request->input('std_cnic');
            $father_cnic = $request->input('father_cnic');


            $search_std_reg_id = DB::table('tbl_registration')->where(['campus_id'=>$campus_id,'std_cnic'=>$student_cnic])->value('registration_id');

            if ($search_std_reg_id){
                $reg_error = [
                  '0' => '<b>Sorry!</b> This student has been already registered in this campus of <b>'.$school_abrevation.'</b>'
                ];
                return response()->json(['error'=>$reg_error]);
            }
            else{

 ///////image moved from std-image to registered-std-images folder
                $std_image = $request->input('std_image');
                $reg_std_image = time().'.'.$std_image;
                $move= File::move(public_path('/images/std-images/'.$std_image),public_path('/images/registered-std-images/'.$reg_std_image));

                //                $src = '/images/std-images/'.$std_image;
//                $dst = '/images/registered-std-images/'.$reg_std_image;
//                Storage::copy($src ,$dst );
//////deleting image
//                Storage::delete('images/std-images/'.$request->std_image);


////////auto generate student registration number
                $std_rand_num = rand(10111,99999);
                $std_reg_num = $school_abrevation.time().$std_rand_num;
//////////////////////////
///// address serialization
            $street = $request->input('street');
            $city = $request->input('city');
            $country = $request->input('country');

            $address = ['street'=>$street,'city'=>$city,'country'=>$country];
            $address = serialize($address);
/////////////////////////
/////session concatnation
                $session_from = $request->input('session_from');
                $session_to = $request->input('session_to');
                $session = $session_from."-To-".$session_to;
/////////////////////////

                $submit_registration_form = new Registration_M();
                $submit_registration_form->campus_id = $campus_id;
                $submit_registration_form->std_reg_num = $std_reg_num;
                $submit_registration_form->class_id = $request->input('class_id');
                $submit_registration_form->std_f_name = $request->input('std_f_name');
                $submit_registration_form->std_m_name = $request->input('std_m_name');
                $submit_registration_form->std_l_name = $request->input('std_l_name');
                $submit_registration_form->std_cnic = $request->input('std_cnic');
                $submit_registration_form->father_name = $request->input('father_name');
                $submit_registration_form->father_cnic = $request->input('father_cnic');
                $submit_registration_form->date_birth = $request->input('date_birth');
                $submit_registration_form->gender = $request->input('gender');
                $submit_registration_form->religion = $request->input('religion');
                $submit_registration_form->cast = $request->input('cast');
                $submit_registration_form->std_image = $std_image;
                $submit_registration_form->std_email = $request->input('std_email');
                $submit_registration_form->std_phone = $request->input('std_phone');
                $submit_registration_form->profession = $request->input('profession');
                $submit_registration_form->class = $request->input('class');
                $submit_registration_form->group = $request->input('group');
                $submit_registration_form->hobbies = $request->input('hobbies');
                $submit_registration_form->address = $address;
                $submit_registration_form->session = $session;
                $submit_registration_form->remember_token = $request->input('_token');
                $submit_registration_form->save();
                //////////////////////student name concatination
                $registration_id = DB::table('tbl_registration')->max('registration_id');
                $student_name = $request->input('std_f_name')." ".$request->input('std_m_name')." ".$request->input('std_l_name');
                /////////end student name concatination
                /////////////////////student monthly_concession
                $monthly_concession = $request->input('monthly_concession');
                if ($monthly_concession){
                    $monthly_fee = $request->input('monthly_fee') - $request->input('monthly_concession');
                }
                else
                    $monthly_fee = $request->input('monthly_fee');
                //////////end student monthly_concession
                $std_adm_fee = new StudentAdmissionFee_M();
                $std_adm_fee->registration_id = $registration_id;
                $std_adm_fee->class_id = $request->input('class_id');
                $std_adm_fee->student_name = $student_name;
                $std_adm_fee->admission_fee = $request->input('admission_fee');
                $std_adm_fee->monthly_fee = $monthly_fee;
                $std_adm_fee->annual_funds_others = $request->input('annual_funds_others');
                $std_adm_fee->total_fee = $request->input('total_fee');
                $std_adm_fee->monthly_concession = $request->input('monthly_concession');
                $std_adm_fee->session = $session;
                $std_adm_fee->remember_token = $request->input('_token');
                $std_adm_fee->save();

                /////////////add student login details
                $randum_num=rand(111,9999);
                $login_randum_num = time().$randum_num;
                $check_active = $request->input('check_active');
                if ($check_active){
                    $student_f_name=$request->input('std_f_name');
                    $user_name=$student_f_name.$login_randum_num."@".$school_abrevation.".com";
                    $randum_num=rand(11,999999);
                    $password = $school_abrevation.time().$randum_num;
                    $bcrypt_std_password = bcrypt($password);

                    $registration_id = DB::table('tbl_registration')->max('registration_id');
                    $role_id = DB::table('tbl_roles')->where('role_name','student')->value('role_id');

                    User::create([
                        'campus_id' => $campus_id,
                        'role_id' => $role_id,
                        'emp_std_id' => $registration_id,
                        'name' => $student_name,
                        'email' => $user_name,
                        'password' => $bcrypt_std_password,
                        'status' => '1',
                        'remember_token' => $request->input('_token')
                    ]);

                    /////////////add parents login details
                    $father_cnic = DB::table('tbl_registration')->where(['campus_id'=>$campus_id,'father_cnic'=>$father_cnic])->count();

                    if ($father_cnic <= 1){
                        $randum_num=rand(11,9999);
                        $login_randum_num = time().$randum_num;
                        $father_name = $request->input('father_name');
                        $parents_user_name = "Parents".$login_randum_num."@".$school_abrevation.".com";
                        $randum_num = rand(100,999999);
                        $f_password = $school_abrevation.time().$randum_num;
                        $bcrypt_father_password = bcrypt($f_password);

                        $role_id = DB::table('tbl_roles')->where('role_name','parents')->value('role_id');

                       User::create([
                            'campus_id' => $campus_id,
                            'role_id' => $role_id,
                            'emp_std_id' => $registration_id,
                            'name' => $father_name,
                            'email' => $parents_user_name,
                            'password' => $bcrypt_father_password,
                            'status' => '1',
                            'remember_token' => $request->input('_token')
                        ]);

                        return response()->json(['success'=>'Student, Parents Account has been activated']);
                    }
                    ////////////////end parents login details
                    return response()->json(['success'=>'Student Account has been activated']);
                }
                ////////////////end student login details
                return response()->json(['success'=>'Without accounts activation']);
            }
        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);

    } //new_registration() closed





}
