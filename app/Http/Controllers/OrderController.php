<?php

namespace App\Http\Controllers;
use App\OrderModel;
use App\ItemModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;



class OrderController extends Controller
{
    public function index($id)
    {
        $item = ItemModel::findOrFail($id);
        return view('order')->with(compact('item'));
       // return view('school_reg');
    }

    public function order(Request $request){

        $order = new OrderModel();
        $item_id = $request->input('item_id');
        $quantity = $request->input('quantity');
        $customer_name = $request->input('customer_name');
        $customer_father = $request->input('customer_father');
        $customer_gender = $request->input('customer_gender');
        $customer_cell = $request->input('customer_cell');
        $adress = $request->input('adress');
        $tehsil = $request->input('tehsil');
        $distric = $request->input('distric');
        $country = $request->input('country');
        $phone_home = $request->input('phone_home');
        $agree = $request->input('i_agree');
        $token = $request->input('_token');

         $address[] = array();
        $address[] = [$adress,$tehsil,$distric,$country];
        $address = serialize($address);


        $order->item_id = $item_id;
        $order->quantity = $quantity;
        $order->customer_name = $customer_name;
        $order->customer_father = $customer_father;
        $order->customer_gender = $customer_gender;
        $order->customer_cell = $customer_cell;
        $order->address = $address;
        $order->phone_home = $phone_home;
        $order->agreement = $agree;
        $order->status = 'nothing';
        $order->remember_token = $token;
        $order->save();

        $session = Session::flash('flash_message','Congratulation You have successfully Ordered..It will be Courier withen three working days at Your Given Address');
        return redirect('/')->with(compact('session'));
    }

}
