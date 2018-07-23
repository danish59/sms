<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManageSections_M;
use App\ManageSubjects_M;
use App\User;
use Validator;
use Auth;
use App\ManageClasses_M;
use App\FeeStructure_M;
use Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;


class FeeStructure_C extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campus_id = Auth::user()->campus_id;
        $allClasses = ManageClasses_M::all()->where('campus_id',$campus_id);

        $fee_structure = DB::table('tbl_fee_structure')
            ->select('tbl_fee_structure.*','tbl_classes.class_name')
            ->join('tbl_classes', 'tbl_fee_structure.class_id', '=', 'tbl_classes.id')
            ->join('tbl_campuses', 'tbl_classes.campus_id', '=', 'tbl_campuses.id')
            ->where('tbl_campuses.id',$campus_id)
            ->orderby('tbl_fee_structure.class_id','ASC')
            ->get();

        return view('institute_admin/manage_fee_structure')->with(['allClasses'=>$allClasses,'fee_structure'=>$fee_structure]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add_fee_structure(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'class_name'=>'required',
            'admission_fee'=>'required',
            'monthly_fee'=>'required',
            'annual_funds_others'=>'required',
        ]);

        if ($validator->passes()) {
            $campus_id = Auth::user()->campus_id;
            $fee_structure = new FeeStructure_M();
            $fee_structure->class_id = $request->input('class_name');
            $fee_structure->admission_fee = $request->input('admission_fee');
            $fee_structure->monthly_fee = $request->input('monthly_fee');
            $fee_structure->annual_funds_others = $request->input('annual_funds_others');
            $fee_structure->remember_token = $request->input('_token');
            $fee_structure->save();

            // $classes =DB::table('tbl_classes')->select('*')->get();
            $fee_structure = DB::table('tbl_fee_structure')
                ->select('tbl_fee_structure.*','tbl_classes.class_name')
                ->join('tbl_classes', 'tbl_fee_structure.class_id', '=', 'tbl_classes.id')
                ->join('tbl_campuses', 'tbl_classes.campus_id', '=', 'tbl_campuses.id')
                ->where('tbl_campuses.id',$campus_id)
                ->orderby('tbl_fee_structure.class_id','ASC')
                ->get();
            return response($fee_structure);
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
    public function edit_fee_structure($fee_str_id)
    {
        $fee_structure = DB::table('tbl_fee_structure')
            ->select('tbl_fee_structure.*','tbl_classes.class_name')
            ->join('tbl_classes', 'tbl_fee_structure.class_id', '=', 'tbl_classes.id')
//            ->join('tbl_campuses', 'tbl_classes.campus_id', '=', 'tbl_campuses.id')
            ->where('tbl_fee_structure.id',$fee_str_id)
            ->orderby('tbl_fee_structure.class_id','ASC')
            ->get();
        return response($fee_structure);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_fee_structure(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'fee_str_id'=>'required',
            'class_id'=>'required',
            'class_name'=>'required',
            'admission_fee'=>'required',
            'monthly_fee'=>'required',
            'annual_funds_others'=>'required',
        ]);

        if ($validator->passes()) {
            $campus_id = Auth::user()->campus_id;
            $fee_str_id = $request->input('fee_str_id');
            $class_id = $request->input('class_id');
            $admission_fee = $request->input('admission_fee');
            $monthly_fee = $request->input('monthly_fee');
            $annual_funds_others = $request->input('annual_funds_others');
            $remember_token = $request->input('_token');

            DB::table('tbl_fee_structure')
                ->where('id',$fee_str_id)
                ->update(['admission_fee'=>$admission_fee,
                    'monthly_fee'=>$monthly_fee,
                    'annual_funds_others'=>$annual_funds_others,
                    'remember_token'=>$remember_token
                    ]);

            $fee_structure = DB::table('tbl_fee_structure')
                ->select('tbl_fee_structure.*','tbl_classes.class_name')
                ->join('tbl_classes', 'tbl_fee_structure.class_id', '=', 'tbl_classes.id')
                ->join('tbl_campuses', 'tbl_classes.campus_id', '=', 'tbl_campuses.id')
                ->where('tbl_campuses.id',$campus_id)
                ->orderby('tbl_fee_structure.class_id','ASC')
                ->get();
            return response($fee_structure);
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
    public function delete_fee_structure($fee_str_id)
    {

        $campus_id = Auth::user()->campus_id;
        DB::table('tbl_fee_structure')->where('id',$fee_str_id)->delete();
        $fee_structure = DB::table('tbl_fee_structure')
            ->select('tbl_fee_structure.*','tbl_classes.class_name')
            ->join('tbl_classes', 'tbl_fee_structure.class_id', '=', 'tbl_classes.id')
            ->join('tbl_campuses', 'tbl_classes.campus_id', '=', 'tbl_campuses.id')
            ->where('tbl_campuses.id',$campus_id)
            ->orderby('tbl_fee_structure.class_id','ASC')
            ->get();
        return response($fee_structure);
    }
}
