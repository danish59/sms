<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


//use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
   // use RedirectsUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);

//        $campus_id = Auth::user()->campus_id;
//        $campus = DB::table('tbl_campuses')->select('*')->where('id',$campus_id)->first();
//        $school_id = $campus->school_id;
//        $data['campus'] = $campus;
//        $my_school = DB::table('myschools')->select('*')->where('id',$school_id)->first();
//        $data['my_school'] = $my_school;

    }

    protected function credentials(Request $request)
    {
        $credentials = $request->only($this->username(), "password");

        return array_add($credentials, "status", "1");
     }

//    protected function authenticate()
//    {
//        if (Auth::attempt(['email' => $email, 'password' => $password])) {
//            // Authentication passed...
//            return redirect()->intended('/campuses');
//        }
//    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    public function redirectPath()
    {
//        dd(Auth::user());
//         exit();
        if(Auth::user()->role_id == 1){

            return 'me_admin';
        }
        elseif(Auth::user()->role_id == 2){
            return 'home';
        }
        elseif (Auth::user()->role_id== 3){
            return 'campus_admin';
        }
        elseif (Auth::user()->role_id == 4){
            return 'vice_principle';
        }
        elseif (Auth::user()->role_id == 5){
            return 'teacher';
        }
        elseif (Auth::user()->role_id == 6){
            return 'student';
        }
        elseif (Auth::user()->role_id == 7){
            return 'parents';
        }
        else return 'false';

    }

  }
