<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\MyschoolsModel;
use App\ManageCampuses_M;
use App\Roles_M;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
         User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $user_id = DB::table('users')->where('email', $data['email'])->value('id');

//        echo $id;
//        exit();
        $office = $data['office'];
        $city = $data['city'];
        $country = $data['country'];
        $address = ['office'=>$office,'city'=>$city,'country'=>$country];
        $address = serialize($address);

        MyschoolsModel::create([
            'reg_no' => $data['reg_no'],
            'school_name' => "",
            'school_abrevation' =>"",
            'reg_school_name' => $data['reg_school_name'],
            'affiliation' => "",
            'total_students' => "0",
            'total_teachers'=> "0",
            'address' => $address,
            'phone_office'=> "0",
            'phone_home'=> "0",
            'email' => $data['email'],
            'owner_name' => $data['owner_name'],
            'owner_father_name' => "",
            'owner_gender'=> "",
            'owner_cnic' => "0",
            'owner_cell' => $data['owner_cell'],
            'principle_name'=>$data['owner_name'],
            'principle_father_name' =>"",
            'principle_gender' => "",
            'principle_cnic' => "0",
            'principle_cell' => $data['owner_cell'],
            'school_level' => "",
            'location' => "",
            'building_status' => "",
            'level_education' => "",
            'director_message' =>"",
            'availability' =>"0",
            'image' =>"",
            'agreement' => $data['checkbox'],

        ]);
        $school_id = DB::table('myschools')->max('id');

        ManageCampuses_M::create([
           'school_id' => $school_id,
            'campus_name' => 'Main Campus',
            'principle_id' => "0",
            'address' => $address,
            'phone_office' => $data['owner_cell'],
            'email' =>  $data['email'],

        ]);
        $campus_id = DB::table('tbl_campuses')->max('id');

        $role_id = DB::table('tbl_roles')->where('role_name','institute_admin')->value('role_id');

        DB::table('users')->where('id',$user_id)->update(['campus_id'=>$campus_id ,'role_id'=>$role_id]);

        return ;
    }
}
