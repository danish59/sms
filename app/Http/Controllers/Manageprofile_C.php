<?php

namespace App\Http\Controllers;
use App\MyschoolsModel;
use App\ProfileGallery_M;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
//use Symfony\Component\HttpFoundation\Tests\Session\Storage;


class Manageprofile_C extends Controller
{

    public function __construct()
    {
    $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $my_profile = MyschoolsModel::all();
        return view("institute_admin/manage_profile")->with(compact('my_profile',$my_profile));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_manage_profile_gallery()
    {
        $campus_id = Auth::user()->campus_id;
//        $profile_gallery=ProfileGallery_M::all();
        $profile_gallery = DB::table('tbl_profile_gallery')->select('*')->where(['campus_id'=>$campus_id])->first();
//        dd($profile_gallery);
//        exit();
//        if ($profile_gallery)
//            echo "not empty";
//        else
//            echo "jhkh";
//        exit();
        return view('institute_admin/manage_profile_gallery')->with(compact('profile_gallery'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add_profile_gallery(Request $request)
    {

        $campus_id = Auth::user()->campus_id;
        $data = DB::table('tbl_profile_gallery')->select('*')->where('campus_id',$campus_id)->first();

        if ($data){
            $val = [
                'message' => 'Action failed... You have already create your gallery! Now you can update it.. My Profile -> Manage Profile'
            ];
            return response()->json(['error'=>$val]);
        }
        else{
            $validator = Validator::make($request->all(), [
                'slider_image1'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'slider_image2'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'slider_image3'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'description_slider1'=>'required',
                'description_slider2'=>'required',
                'description_slider3'=>'required',
                'gallery_image1'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'gallery_image2'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'gallery_image3'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'gallery_image4'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'gallery_image5'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'gallery_image6'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'gallery_image7'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'gallery_image8'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
                'title_gallery_image1'=>'required',
                'title_gallery_image2'=>'required',
                'title_gallery_image3'=>'required',
                'title_gallery_image4'=>'required',
                'title_gallery_image5'=>'required',
                'title_gallery_image6'=>'required',
                'title_gallery_image7'=>'required',
                'title_gallery_image8'=>'required',

//            'design_image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024'//|dimensions:min_width=200,max_width=1000,min_height=300,max_height=1000'//max:1024'
            ]);

            if ($validator->passes()) {

                $slider_image1 = time().'.'.$request->slider_image1->getClientOriginalName();
                $request->slider_image1->move(public_path('images/admin-images/profile_gallery'), $slider_image1);

                $slider_image2 = time().'.'.$request->slider_image2->getClientOriginalName();
                $request->slider_image2->move(public_path('images/admin-images/profile_gallery'), $slider_image2);

                $slider_image3 = time().'.'.$request->slider_image3->getClientOriginalName();
                $request->slider_image3->move(public_path('images/admin-images/profile_gallery'), $slider_image3);

                $gallery_image1 = time().'.'.$request->gallery_image1->getClientOriginalName();
                $request->gallery_image1->move(public_path('images/admin-images/profile_gallery'), $gallery_image1);

                $gallery_image2 = time().'.'.$request->gallery_image2->getClientOriginalName();
                $request->gallery_image2->move(public_path('images/admin-images/profile_gallery'), $gallery_image2);

                $gallery_image3 = time().'.'.$request->gallery_image3->getClientOriginalName();
                $request->gallery_image3->move(public_path('images/admin-images/profile_gallery'), $gallery_image3);

                $gallery_image4 = time().'.'.$request->gallery_image4->getClientOriginalName();
                $request->gallery_image4->move(public_path('images/admin-images/profile_gallery'), $gallery_image4);

                $gallery_image5 = time().'.'.$request->gallery_image5->getClientOriginalName();
                $request->gallery_image5->move(public_path('images/admin-images/profile_gallery'), $gallery_image5);

                $gallery_image6 = time().'.'.$request->gallery_image6->getClientOriginalName();
                $request->gallery_image6->move(public_path('images/admin-images/profile_gallery'), $gallery_image6);

                $gallery_image7 = time().'.'.$request->gallery_image7->getClientOriginalName();
                $request->gallery_image7->move(public_path('images/admin-images/profile_gallery'), $gallery_image7);

                $gallery_image8 = time().'.'.$request->gallery_image8->getClientOriginalName();
                $request->gallery_image8->move(public_path('images/admin-images/profile_gallery'), $gallery_image8);

                //            Storage::disk('local')->put('design_images/'.$filename,file_get_contents($request->file('design_image')->getRealPath()));

                $profile_gallery = new ProfileGallery_M();
                $profile_gallery->campus_id = $campus_id;
                $profile_gallery->slider_image1 = $slider_image1;
                $profile_gallery-> discription_slider1 = $request->input('description_slider1');
                $profile_gallery->slider_image2 = $slider_image2;
                $profile_gallery-> discription_slider2 = $request->input('description_slider2');
                $profile_gallery->slider_image3 = $slider_image3;
                $profile_gallery-> discription_slider3 = $request->input('description_slider3');

                $profile_gallery->gallery_image1 = $gallery_image1;
                $profile_gallery-> title_gallery_image1 = $request->input('title_gallery_image1');
                $profile_gallery->gallery_image2 = $gallery_image2;
                $profile_gallery-> title_gallery_image2 = $request->input('title_gallery_image2');
                $profile_gallery->gallery_image3 = $gallery_image3;
                $profile_gallery-> title_gallery_image3 = $request->input('title_gallery_image3');
                $profile_gallery->gallery_image4 = $gallery_image4;
                $profile_gallery-> title_gallery_image4 = $request->input('title_gallery_image4');
                $profile_gallery->gallery_image5 = $gallery_image5;
                $profile_gallery-> title_gallery_image5 = $request->input('title_gallery_image5');
                $profile_gallery->gallery_image6 = $gallery_image6;
                $profile_gallery-> title_gallery_image6 = $request->input('title_gallery_image6');
                $profile_gallery->gallery_image7 = $gallery_image7;
                $profile_gallery-> title_gallery_image7 = $request->input('title_gallery_image7');
                $profile_gallery->gallery_image8 = $gallery_image8;
                $profile_gallery-> title_gallery_image8 = $request->input('title_gallery_image8');

                $profile_gallery->availability = $request->input('availability');
                $profile_gallery->remember_token = $request->input('_token');
                $profile_gallery->save();

                return response()->json(['success'=>'done']);
            }

            return response()->json(['error'=>$validator->errors()->all()]);
        }

    }

    public function update_profile_gallery(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'description_slider1'=>'required',
            'description_slider2'=>'required',
            'description_slider3'=>'required',
            'title_gallery_image1'=>'required',
            'title_gallery_image2'=>'required',
            'title_gallery_image3'=>'required',
            'title_gallery_image4'=>'required',
            'title_gallery_image5'=>'required',
            'title_gallery_image6'=>'required',
            'title_gallery_image7'=>'required',
            'title_gallery_image8'=>'required',

//            'design_image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024'//|dimensions:min_width=200,max_width=1000,min_height=300,max_height=1000'//max:1024'
        ]);

        if ($validator->passes()) {

            if ($request->slider_image1 !==''){
                //////deleting precious image
                File::delete('images/admin-images/profile_images'.$request->previous_slider_image1);

                //////////////upload updating image
                $slider_image1 = time().'.'.$request->slider_image1->getClientOriginalName();
                $request->slider_image1->move(public_path('images/admin-images/profile_gallery'), $slider_image1);
                //////////////////////////////////
            }
            else
                $slider_image1 = $request->previous_slider_image1;

            if ($request->slider_image2 !==''){
                //////deleting precious image
                File::delete('images/admin-images/profile_images'.$request->previous_slider_image2);

                //////////////upload updating image
                $slider_image2 = time().'.'.$request->slider_image2->getClientOriginalName();
                $request->slider_image2->move(public_path('images/admin-images/profile_gallery'), $slider_image2);
                //////////////////////////////////
            }
            else
                $slider_image2 = $request->previous_slider_image2;

            if ($request->slider_image3 !==''){
                //////deleting precious image
                File::delete('images/admin-images/profile_images'.$request->previous_slider_image3);

                //////////////upload updating image
                $slider_image3 = time().'.'.$request->slider_image3->getClientOriginalName();
                $request->slider_image3->move(public_path('images/admin-images/profile_gallery'), $slider_image3);
                //////////////////////////////////
            }
            else
                $slider_image3 = $request->previous_slider_image3;

            if ($request->gallery_image1 !==''){
                //////deleting precious image
                File::delete('images/admin-images/profile_images'.$request->title_gallery_image1);

                //////////////upload updating image
                $gallery_image1 = time().'.'.$request->gallery_image1->getClientOriginalName();
                $request->gallery_image1->move(public_path('images/admin-images/profile_gallery'), $gallery_image1);
                //////////////////////////////////
            }
            else
                $gallery_image1 = $request->title_gallery_image1;

            if ($request->gallery_image2 !==''){
                //////deleting precious image
                File::delete('images/admin-images/profile_images'.$request->title_gallery_image2);

                //////////////upload updating image
                $gallery_image2 = time().'.'.$request->gallery_image2->getClientOriginalName();
                $request->gallery_image2->move(public_path('images/admin-images/profile_gallery'), $gallery_image2);
                //////////////////////////////////
            }
            else
                $gallery_image2 = $request->title_gallery_image1;

            if ($request->gallery_image3 !==''){
                //////deleting precious image
                File::delete('images/admin-images/profile_images'.$request->title_gallery_image3);

                //////////////upload updating image
                $gallery_image3 = time().'.'.$request->gallery_image1->getClientOriginalName();
                $request->gallery_image3->move(public_path('images/admin-images/profile_gallery'), $gallery_image3);
                //////////////////////////////////
            }
            else
                $gallery_image3 = $request->title_gallery_image3;

            if ($request->gallery_image4 !==''){
                //////deleting precious image
                File::delete('images/admin-images/profile_images'.$request->title_gallery_image4);

                //////////////upload updating image
                $gallery_image4 = time().'.'.$request->gallery_image4->getClientOriginalName();
                $request->gallery_image4->move(public_path('images/admin-images/profile_gallery'), $gallery_image4);
                //////////////////////////////////
            }
            else
                $gallery_image4 = $request->title_gallery_image4;

            if ($request->gallery_image5 !==''){
                //////deleting precious image
                File::delete('images/admin-images/profile_images'.$request->title_gallery_image5);

                //////////////upload updating image
                $gallery_image5 = time().'.'.$request->gallery_image5->getClientOriginalName();
                $request->gallery_image5->move(public_path('images/admin-images/profile_gallery'), $gallery_image5);
                //////////////////////////////////
            }
            else
                $gallery_image5 = $request->title_gallery_image5;

            if ($request->gallery_image6 !==''){
                //////deleting precious image
                File::delete('images/admin-images/profile_images'.$request->title_gallery_image6);

                //////////////upload updating image
                $gallery_image6 = time().'.'.$request->gallery_image6->getClientOriginalName();
                $request->gallery_image6->move(public_path('images/admin-images/profile_gallery'), $gallery_image6);
                //////////////////////////////////
            }
            else
                $gallery_image6 = $request->title_gallery_image6;

            if ($request->gallery_image7 !==''){
                //////deleting precious image
                File::delete('images/admin-images/profile_images'.$request->title_gallery_image7);

                //////////////upload updating image
                $gallery_image7 = time().'.'.$request->gallery_image7->getClientOriginalName();
                $request->gallery_image7->move(public_path('images/admin-images/profile_gallery'), $gallery_image7);
                //////////////////////////////////
            }
            else
                $gallery_image7 = $request->title_gallery_image7;

            if ($request->gallery_image8 !==''){
                //////deleting precious image
                File::delete('images/admin-images/profile_images'.$request->title_gallery_image8);

                //////////////upload updating image
                $gallery_image8 = time().'.'.$request->gallery_image8->getClientOriginalName();
                $request->gallery_image8->move(public_path('images/admin-images/profile_gallery'), $gallery_image8);
                //////////////////////////////////
            }
            else
                $gallery_image8 = $request->title_gallery_image8;


            //            Storage::disk('local')->put('design_images/'.$filename,file_get_contents($request->file('design_image')->getRealPath()));

            $campus_id = Auth::user()->campus_id;

            $slider_image1 = $slider_image1;
            $discription_slider1 = $request->input('description_slider1');
            $slider_image2 = $slider_image2;
            $discription_slider2 = $request->input('description_slider2');
            $slider_image3 = $slider_image3;
            $discription_slider3 = $request->input('description_slider3');

            $gallery_image1 = $gallery_image1;
            $title_gallery_image1 = $request->input('title_gallery_image1');
            $gallery_image2 = $gallery_image2;
            $title_gallery_image2 = $request->input('title_gallery_image2');
            $gallery_image3 = $gallery_image3;
            $title_gallery_image3 = $request->input('title_gallery_image3');
            $gallery_image4 = $gallery_image4;
            $title_gallery_image4 = $request->input('title_gallery_image4');
            $gallery_image5 = $gallery_image5;
            $title_gallery_image5 = $request->input('title_gallery_image5');
            $gallery_image6 = $gallery_image6;
            $title_gallery_image6 = $request->input('title_gallery_image6');
            $gallery_image7 = $gallery_image7;
            $title_gallery_image7 = $request->input('title_gallery_image7');
            $gallery_image8 = $gallery_image8;
            $title_gallery_image8 = $request->input('title_gallery_image8');

            $availability = $request->input('availability');
            $remember_token = $request->input('remember_token');
            //$profile_gallery->save();

            DB::table('tbl_profile_gallery')
                        ->where('campus_id',$campus_id)
                        ->update([
                            'slider_image1'=>$slider_image1,
                            'discription_slider1'=>$discription_slider1,
                            'slider_image2'=>$slider_image2,
                            'discription_slider2'=>$discription_slider2,
                            'slider_image3'=>$slider_image3,
                            'discription_slider3'=>$discription_slider3,
                            'gallery_image1'=>$gallery_image1,
                            'title_gallery_image1'=>$title_gallery_image1,
                            'gallery_image2'=>$gallery_image2,
                            'title_gallery_image2'=>$title_gallery_image2,
                            'gallery_image3'=>$gallery_image3,
                            'title_gallery_image3'=>$title_gallery_image3,
                            'gallery_image4'=>$gallery_image4,
                            'title_gallery_image4'=>$title_gallery_image4,
                            'gallery_image5'=>$gallery_image5,
                            'title_gallery_image5'=>$title_gallery_image5,
                            'gallery_image6'=>$gallery_image6,
                            'title_gallery_image6'=>$title_gallery_image6,
                            'gallery_image7'=>$gallery_image7,
                            'title_gallery_image7'=>$title_gallery_image7,
                            'gallery_image8' =>$gallery_image8,
                            'title_gallery_image8' =>$title_gallery_image8,
                            'availability' => $availability,
                            'remember_token' =>$remember_token
                        ]);
            return response()->json(['success'=>'done']);
        }

        return response()->json(['error'=>$validator->errors()->all()]);
    }


    public function edit($id)
    {
        $editable_profile = MyschoolsModel::findOrFail($id);
        return view('institute_admin.edit_delete_profile')->with(compact('editable_profile',$editable_profile));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
        //  'logo_image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',//|dimensions:min_width=200,max_width=1000,min_height=300,max_height=1000'//max:1024'
            'school_name'=>'required',
            'abrevation'=>'required',
            'reg_school_name'=>'required',
            'reg_no'=>'required',
            'board_name'=>'required',
            'no_students'=>'required',
            'no_teachers'=>'required',
            'office'=>'required',
            'city'=>'required',
            'country'=>'required',
            'phone_office'=>'required',
            'phone_home'=>'required',
            'email'=>'required',
            'owner_name'=>'required',
            'owner_father'=>'required',
            'owner_gender'=>'required',
            'owner_cnic'=>'required',
            'owner_cell'=>'required',
            'principle_name'=>'required',
            'principle_father'=>'required',
            'principle_gender'=>'required',
            'principle_cnic'=>'required',
            'principle_cell'=>'required',
            'school_level'=>'required',
            'location'=>'required',
            'build_status'=>'required',
            'level_education'=>'required',
            'director_message'=>'required',
            'availability'=>'required'
        ]);

        if ($validator->passes()) {
            if ($request->logo_image !==''){
                //////deleting precious image
                File::delete('images/admin-images/profile_images'.$request->previous_image);
                /////////////////////////////

                //////////////upload updating image
                $filename = time().'.'.$request->logo_image->getClientOriginalName();
                $request->logo_image->move(public_path('images/admin-images/profile_images'), $filename);
                //////////////////////////////////
            }
            else
                $filename = $request->previous_image;

            $id = $request->input('id');
            $school_name = $request->input('school_name');
            $abrevation = $request->input('abrevation');
            $reg_school_name = $request->input('reg_school_name');
            $reg_no = $request->input('reg_no');
            $board_name = $request->input('board_name');
            $no_students = $request->input('no_students');
            $no_teachers = $request->input('no_teachers');
            $office = $request->input('office');
            $city = $request->input('city');
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
            $director_message = $request->input('director_message');
            $availability = $request->input('availability');
            $image = $filename;
            $remember_token = $request->input('remember_token');
//            $update_item->fill($item)->save();
////////////////////////////////////////////
            $address = ['office'=>$office,
                            'city'=>$city,
                            'country'=>$country
                            ];
            $address = serialize($address);

            $level_education = serialize($level_education);
///////////////////////////////////////////////

            DB::table('myschools')
                ->where('id',$id)
                ->update(['reg_no' => $reg_no,
            'school_name' => $school_name,
            'school_abrevation' => $abrevation,
            'reg_school_name' => $reg_school_name,
            'affiliation' => $board_name,
            'total_students' => $no_students,
            'total_teachers' => $no_teachers,
            'address' => $address,
            'phone_office' => $phone_office,
            'phone_home' => $phone_home,
            'email' => $email,
            'owner_name'=> $owner_name,
            'owner_father_name' => $owner_father,
            'owner_gender' => $owner_gender,
            'owner_cnic' => $owner_cnic,
            'owner_cell' => $owner_cell,
            'principle_name' => $principle_name,
            'principle_father_name' => $principle_father,
            'principle_gender' => $principle_gender,
            'principle_cnic' => $principle_cnic,
            'principle_cell' => $principle_cell,
            'school_level' => $school_level,
            'location' => $location,
            'building_status' => $build_status,
            'level_education' => $level_education,
            'director_message' => $director_message,
            'availability' => $availability,
            'image'=> $image,
            'remember_token'=> $remember_token
                        ]);
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
    public function destroy(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'id' => 'required',
            'design_image' => 'required'
        ]);
            if ($validator->passes()){
                //////deleting image
                File::delete('images/design_images/' . $request->design_image);
                /////////////////////////////

                DB::table('tbl_items')->where('id',$request->id)->delete();
            return response()->json(['success'=>'done']);
        }
        else{
            return response()->json(['error'=>$validator->errors()->all()]);
        }

    }

}
