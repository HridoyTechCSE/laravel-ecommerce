@extends('frontend.layouts.master')
@section('content')
    <style type="text/css">
        .prof li{
            background: #00aced;
            padding: 7px;
            margin: 5px;
            border-radius: 15px;
        }
        .prof li a{
            color: #fff;
            padding-left: 15px;
        }
    </style>
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{asset('public/frontend')}}/images/bg-01.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
             Order Details
        </h2>
    </section>


    <div class="about-content">
        <div class="container">
            <div class="row" style="padding: 15px 0px 15px 0px">
                <div class="col-md-2">
                    <ul class="prof">
                        <li><a href="">My profile</a></li>
                        <li><a href="">Password Change</a></li>
                        <li><a href="{{route('customer.order.list')}}">My Orders</a></li>
                    </ul>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <table class="txt-center mytable" width="100%" border="1">
                            <tr>
                                <td width="30%">
                                    <img src="{{url('public/upload/logo_images/'.$logo->image)}}" style="width: 150px" alt="img-logo">
                                </td>

                                <td width="40%">
                                    <h4><strong>Furnish Furniture</strong></h4>
                                    <span><strong>Mobile no: </strong>{{$contact->mobile_no}}</span><br>
                                    <span><strong>Address: </strong>{{$contact->address}}</span><br>
                                </td>

                                <td width="30%">

                                    <strong>Order no: # {{$order->order_no}}</strong>
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Billing Info: </strong></td>
                                <td colspan="2" style="text-align: left;">
                                    <strong>Name :</strong>{{$order['shipping']['name']}}
                                    <strong>Mobile no :</strong>{{$order['shipping']['mobile_no']}}<br>
                                    <strong>Email :</strong>{{$order['shipping']['email']}}
                                    <strong>Address :</strong>{{$order['shipping']['address']}}<br>
                                    <strong>Payment :</strong>
                                    {{$order['payment']['payment_method']}}
                                    @if($order['payment']['payment_method']=='bkash')
                                        (Transaction no :{{$order['payment']['transaction_no']}} )
                                    @endif<br>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3"> <strong>Order Details</strong> </td>
                            </tr>
                            <tr>
                                <td> <strong>Product name & Image</strong> </td>
                                <td> <strong>Color & Size</strong> </td>
                                <td> <strong>Quality & Price</strong> </td>
                            </tr>

                            @foreach($order['order_details'] as $details)
                                <tr>
                                    <td><img src="{{url('public/upload/product_images/'.$details['product']['image'])}}" style="width: 123px;" alt=""></td>
                                    <td>{{$details['color']['name']}} & {{$details['size']['name']}}</td>
                                    <td> @php

                                                $sub_total = $details->quantity*$details['product']['price'];
                                        @endphp

                                        {{$details->quantity}} x {{$details['product']['price']}} = {{$sub_total}} Tk


                                    </td>
                                </tr>

                            @endforeach

                            <tr>
                                <td colspan="2" style="text-align: right"> <strong>Grand Total</strong> </td>
                                <td> <strong>{{$order->order_total}}</strong> </td>
                            </tr>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
