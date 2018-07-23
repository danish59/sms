<?php

namespace App\Http\Controllers;

use App\OrderModel;
use App\ItemModel;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManageOrders_C extends Controller
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
        $orders = DB::table('tbl_orders')->select('tbl_orders.*','tbl_items.*')
                                        ->join('tbl_items','tbl_orders.item_id','=','tbl_items.id')
//                                        ->orderBy('tbl_orders.order_id','desc')
                                        ->get();

        return view("institute_admin/manage_orders")->with(compact('orders'));
    }

    public  function order_action(Request $request){
        $validator = Validator::make($request->all(), [
            'order_id'=>'required',
            'action'=>'required'
        ]);

        if ($validator->passes()) {

            DB::table('tbl_orders')
                ->where('order_id',$request->order_id)
                ->update(['status'=>$request->input('action'),
                ]);
//            $order_action = OrderModel::where('order_id',$request->order_id);
//            $order_action->status = $request->input('action');
//            $order_action->save();
            return response()->json(['success' => 'done']);
        }
        return response()->json(['error'=>$validator->errors()->all()]);


    }

}
