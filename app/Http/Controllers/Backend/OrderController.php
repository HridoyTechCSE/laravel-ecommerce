<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Contact;
use App\Model\Logo;
use App\Model\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function pendingList(){
        $data['orders'] =  Order::where('status','0')->get();
        return view('backend.order.pending-list',$data);
    }
    public function approveList(){
        $data['orders'] =  Order::where('status','1')->get();
        return view('backend.order.approved-list',$data);
    }

    public function details($id){
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['order'] =  Order::find($id);
        return view('backend.order.order-details',$data);
    }

    public function approve($id){

        $order = Order::find($id);
        $order->status = '1';
        $order->save();
        return redirect()->back()->with('success','your product is now approve');
    }

}
