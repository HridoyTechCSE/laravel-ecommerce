<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Brand;
use App\Model\Contact;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Product;
use App\Model\ProductSubImage;
use App\Model\ProductSize;
use App\Model\ProductColor;
use App\Model\Color;
use App\Model\Size;
use App\Model\Communicate;
use Mail;
use Cart;
use App\User;
use DB;
use App\Model\Shipping;
use App\Model\Payment;
use App\Model\Order;
use App\Model\OrderDetail;

use Auth;
use Session;


class CheckoutController extends Controller
{
    public function customerLogin(){
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        return view('frontend.single_pages.customer-login',$data);
    }

    public function customerSignup(){
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        return view('frontend.single_pages.customer-signup',$data);
    }
    public function SignupStore(Request $request){

        DB::transaction(function () use($request) {
            $this->validate($request,[
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'mobile' => 'required|min:11|numeric',
                'password' => 'min:6|required_with:password_confirmation|same:password_confirmation','password_confirmation' => 'min:6'
            ]);

        });

        $code = rand(0000,9999);
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->password = bcrypt($request->password) ;
        $user->code = $code;
        $user->status = '0';
        $user->usertype = 'customer';

        $user->save();


        $data = array(

            'email' => $request->email,
            'code' => $code,
        );
        Mail::send('frontend.emails.verify-email',$data, function ($message) use($data){

            $message->from($data['email'],'cb computer basic');
            $message->to('hk516161@gmail.com');
            $message->subject('please verify your email');
        });

        return redirect()->route('email.verify')->with('success','you have successfully signed up please verify your email');


    }
    public function emailVerify(){
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        return view('frontend.single_pages.email-verify',$data);
    }

    public function verifyStore(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'code' => 'required'

        ]);

        $checkData = User::where('email',$request->email)->where('code',$request->code)->first();
        if ($checkData){
            $checkData->status = '1';
            $checkData->save();
            return redirect()->route('customer.login')->with('success','you have successfully verified, please login to your account');
        }else{
            return redirect()->back()->with('error','sorry your email and verification code does not match');
        }
    }

    public function checkout(){
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        return view('frontend.single_pages.customer-checkout',$data);
    }
    public function checkoutStore(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'mobile_no' => 'required|min:11|numeric',
            'address' => 'required',


        ]);
        $checkout = new Shipping();
        $checkout->user_id = Auth::user()->id;
        $checkout->name = $request->name;
        $checkout->email = $request->email;
        $checkout->mobile_no = $request->mobile_no;
        $checkout->address = $request->address;
        $checkout->save();
        Session::put('shipping_id',$checkout->id);
        return redirect()->route('customer.payment')->with('success','Data save successfully');
    }

}
