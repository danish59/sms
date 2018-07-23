<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManageEmp_M;
use App\ManageCampuses_M;
use App\Roles_M;
use App\User;
use Illuminate\Http\Response;
use function Sodium\randombytes_buf;
use Validator;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;


class ManageEmployees_C extends Controller
{
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
    public function add_employee_form()
    {
        return view('institute_admin/new_appointment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add_employee(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'emp_f_name'=>'required',
            'emp_l_name'=>'required',
            'emp_cnic'=>'required',
            'father_name'=>'required',
            'father_cnic'=>'required',
            'date_birth'=>'required',
            'gender'=>'required',
            'religion'=>'required',
            'cast'=>'required',
            'emp_image'=>'required',
            'emp_email'=>'required',
            'emp_phone'=>'required',
            'address'=>'required',
            'position'=>'required',
            'degree_certificate'=>'required',
            'cgpa_percentage'=>'required',
            'university_college'=>'required',
            'passing_year'=>'required'
        ]);

        if ($validator->passes()){
            //////////////upload updating image
            $filename = time().'.'.$request->emp_image->getClientOriginalName();
            $request->emp_image->move(public_path('images/emp-images/'), $filename);
            //////////////////////////////////
            $campus_id = Auth::user()->campus_id;

            $street = $request->input('address');
            $city  = $request->input('city');
            $country = $request->input('country');
            $address = ['street'=>$street,'city'=>$city,'country'=>$country];
            $address = serialize($address);

            $user_account =  $request->input('check_active');
            if ($user_account){
                $user_account = 1;
            }
            else
                $user_account = 0;

            $addemployee = new  ManageEmp_M();
            $addemployee->campus_id = $campus_id;
            $addemployee->emp_f_name = $request->input('emp_f_name');
            $addemployee->emp_m_name = $request->input('emp_m_name');
            $addemployee->emp_l_name = $request->input('emp_l_name');
            $addemployee->emp_cnic = $request->input('emp_cnic');
            $addemployee->father_name = $request->input('father_name');
            $addemployee->father_cnic = $request->input('father_cnic');
            $addemployee->date_birth = $request->input('date_birth');
            $addemployee->gender = $request->input('gender');
            $addemployee->religion = $request->input('religion');
            $addemployee->cast = $request->input('cast');
            $addemployee->emp_image = $filename;
            $addemployee->emp_email = $request->input('emp_email');
            $addemployee->emp_phone = $request->input('emp_phone');
            $addemployee->address = $address;
            $addemployee->role = $request->input('position');
            $addemployee->degree_certificate = $request->input('degree_certificate');
            $addemployee->cgpa_percentage = $request->input('cgpa_percentage');
            $addemployee->university_college = $request->input('university_college');
            $addemployee->passing_year = $request->input('passing_year');
            $addemployee->experience = $request->input('experience');
            $addemployee->duration = $request->input('duration');
            $addemployee->certificates_coureses1 = $request->input('certificates_coureses1');
            $addemployee->certificates_coureses2 = $request->input('certificates_coureses2');
            $addemployee->certificates_coureses3 = $request->input('certificates_coureses3');
            $addemployee->skil1 = $request->input('skil1');
            $addemployee->skil2 = $request->input('skil2');
            $addemployee->skil3 = $request->input('skil3');
            $addemployee->user_account = $user_account;
            $addemployee->remember_token = $request->input('_token');
            $addemployee->save();

            if ($user_account){
                $emp_std_id = DB::table('tbl_employee')->max('id');
                $password1=rand(1111,999999999);
                $password = $request->input('emp_f_name').$password1;

                 User::create([
                    'campus_id' => $campus_id,
                    'role_id' => $request->input('position'),
                    'emp_std_id' => $emp_std_id,
                    'name' => $request->input('emp_f_name'),
                    'email' => $request->input('emp_email'),
                    'password' => bcrypt($password),
                    'status' => '1',
                    'remember_token' => $request->input('_token')
                ]);

//                Mail::queue('emails.new_account', compact('password'), function ($message) use ($user) {
//                    $message->subject('Your new account');
//                    $message->to($user->email, $user->name);
//                });
            }

            return response()->json(['success'=>'done']);
        }
        else
            return response()->json(['error'=>$validator->errors()->all()]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function manage_employee_form()
    {
        //$employees = ManageEmp_M::all();
        $employees =DB::table('tbl_employee')
            ->select('tbl_employee.*','tbl_campuses.campus_name as campus_name','tbl_roles.role_name as role_name')
            ->join('tbl_campuses', 'tbl_employee.campus_id', '=', 'tbl_campuses.id')
            ->join('tbl_roles', 'tbl_employee.role', '=', 'tbl_roles.role_id')
            ->get();

        $notification = array(
            'message' => 'I am a successful message!',
            'alert-type' => 'success'
        );

        //return Redirect::to('/')->with($notification);
        return view('institute_admin/manage_employees')->with(['employees'=>$employees,'notification'=>$notification]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_employee($id)
    {
        $employee = ManageEmp_M::findOrFail($id);
        return view('institute_admin/edit_employee')->with(compact('employee',$employee));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_employee(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'emp_f_name'=>'required',
            'emp_l_name'=>'required',
            'emp_cnic'=>'required',
            'father_name'=>'required',
            'father_cnic'=>'required',
            'date_birth'=>'required',
            'gender'=>'required',
            'religion'=>'required',
            'cast'=>'required',
            'emp_email'=>'required',
            'emp_phone'=>'required',
            'address'=>'required',
            'position'=>'required',
            'degree_certificate'=>'required',
            'cgpa_percentage'=>'required',
            'university_college'=>'required',
            'passing_year'=>'required'
        ]);

        if ($validator->passes()){

            if ($request->emp_image !=''){
                File::delete('images/emp-images/'.$request->previous_image);
                //////////////upload updating image
                $filename = time().'.'.$request->emp_image->getClientOriginalName();
                $request->emp_image->move(public_path('images/emp-images/'), $filename);
            }
            else
                $filename = $request->previous_image;
            //////////////////////////////////
            $campus_id = Auth::user()->campus_id;

            $street = $request->input('address');
            $city  = $request->input('city');
            $country = $request->input('country');
            $address = ['street'=>$street,'city'=>$city,'country'=>$country];
            $address = serialize($address);

            $user_account =  $request->input('check_active');
            if ($user_account){
                $user_account = 1;
            }
            else
                $user_account = 0;


            $campus_id = $campus_id;
            $emp_f_name = $request->input('emp_f_name');
            $emp_m_name = $request->input('emp_m_name');
            $emp_l_name = $request->input('emp_l_name');
            $emp_cnic = $request->input('emp_cnic');
            $father_name = $request->input('father_name');
            $father_cnic = $request->input('father_cnic');
            $date_birth = $request->input('date_birth');
            $gender = $request->input('gender');
            $religion = $request->input('religion');
            $cast = $request->input('cast');
            $emp_image = $filename;
            $emp_email = $request->input('emp_email');
            $emp_phone = $request->input('emp_phone');
            $address = $address;
            $role = $request->input('position');
            $degree_certificate = $request->input('degree_certificate');
            $cgpa_percentage = $request->input('cgpa_percentage');
            $university_college = $request->input('university_college');
            $passing_year = $request->input('passing_year');
            $experience = $request->input('experience');
            $duration = $request->input('duration');
            $certificates_coureses1 = $request->input('certificates_coureses1');
            $certificates_coureses2 = $request->input('certificates_coureses2');
            $certificates_coureses3 = $request->input('certificates_coureses3');
            $skil1 = $request->input('skil1');
            $skil2 = $request->input('skil2');
            $skil3 = $request->input('skil3');
            $user_account = $user_account;
            $remember_token = $request->input('_token');

             DB::table('tbl_employee')->where('id',$request->id)->update([
                 'emp_f_name' => $emp_f_name,
                 'emp_m_name' => $emp_m_name,
                 'emp_l_name' => $emp_l_name,
                 'emp_cnic' => $emp_cnic,
                 'father_name' => $father_name,
                 'father_cnic' => $father_cnic,
                 'date_birth' => $date_birth,
                 'gender' => $gender,
                 'religion' => $religion,
                 'cast' => $cast,
                 'emp_image' => $filename,
                 'emp_email' => $emp_email,
                 'emp_phone' => $emp_phone,
                 'address' => $address,
                 'role' => $role,
                 'degree_certificate' => $degree_certificate,
                 'cgpa_percentage' => $cgpa_percentage,
                 'university_college' => $university_college,
                 'passing_year' => $passing_year,
                 'experience' => $experience,
                 'duration' => $duration,
                 'certificates_coureses1' => $certificates_coureses1,
                 'certificates_coureses2' => $certificates_coureses2,
                 'certificates_coureses3' => $certificates_coureses3,
                 'skil1' => $skil1,
                 'skil2' => $skil2 ,
                 'skil3' => $skil3 ,
                 'user_account' =>$user_account ,
                 'remember_token' =>$remember_token ,
             ]);

            if ($user_account){
                $user_id = DB::table('users')->where('emp_std_id', $request->input('id'))->value('id');
                if ($user_id){
                    DB::table('users')->where('emp_std_id',$request->input('id'))->update([
                        'role_id' => $role,
                        'name' => $emp_f_name,
                        'email' => $emp_email,
                        'status' => '1',
                        'remember_token' => $remember_token
                    ]);
                }
                else{
                    $password1=rand(1111,999999999);
                    $password = $request->input('emp_f_name').$password1;

                    User::create([
                        'campus_id' => $campus_id,
                        'role_id' => $role,
                        'emp_std_id' => $request->input('id'),
                        'name' => $emp_f_name,
                        'email' => $emp_email,
                        'password' => bcrypt($password),
                        'status' => '1',
                        'remember_token' => $remember_token
                    ]);

                }
            }
            else{
                $user_id = DB::table('users')->where('emp_std_id', $request->input('id'))->value('id');
                if ($user_id){
                    DB::table('users')->where('emp_std_id',$request->input('id'))->update([
                        'role_id' => $role,
                        'name' => $emp_f_name,
                        'email' => $emp_email,
                        'status' => '0',
                        'remember_token' => $remember_token
                    ]);
                }
            }

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
    public function delete_employee($emp_id)
    {
        $employee = ManageEmp_M::findOrFail($emp_id);
        ///////////////delete employee image from directory
        $emp_image = $employee->emp_image;
        File::delete('images/emp-images/'.$emp_image);
        ///////////////delete emp user_account if exist
        $user_account = $employee->user_account;
        if ($user_account){
            DB::table('users')->where('emp_std_id',$emp_id)->delete();
        }
        //////////////delete employee
        DB::table('tbl_employee')->where('id',$emp_id)->delete();

        /////////////show all employees
        $employees = DB::table('tbl_employee')
            ->select('tbl_employee.*','tbl_campuses.campus_name as campus_name','tbl_roles.role_name as role_name')
            ->join('tbl_campuses', 'tbl_employee.campus_id', '=', 'tbl_campuses.id')
            ->join('tbl_roles', 'tbl_employee.role', '=', 'tbl_roles.role_id')
            ->get();


        //$data['employees'] =  json_encode($employees);
        return response()->json(['success'=>'done']);
    }
}
