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
            Customer Order
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
                   <table class="table table-bordered">
                       <thead>
                       <tr>
                           <th>Order No</th>
                           <th>Total Amount</th>
                           <th>Payment Type</th>
                           <th>Status</th>
                           <th>Action</th>
                       </tr>
                       </thead>

                       <tbody>
                       @foreach($orders as $order)
                       <tr>
                           <td>{{$order->order_no}}</td>
                           <td>{{$order->order_total}}</td>
                           <td>
                               {{$order['payment']['payment_method']}}
                               @if($order['payment']['payment_method']=='bkash')
                                   (Transaction no :{{$order['payment']['transaction_no']}} )
                               @endif
                           </td>


                           <td>
                               @if($order->status=='0')
                                   <span style="background: #dd4F42;padding:5px;color: #fff" >Unapproved</span>
                               @elseif($order->status=='1')
                                   <span style="background: #4cd24e;padding:5px;color: #fff" >Approved</span>
                               @endif
                           </td>
                           <td>
                               <a href="{{route('customer.order.details',$order->id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-eye"></i>  </a>
                               <a href="{{route('customer.order.print',$order->id)}}" target="_blank" class="btn btn-primary btn-sm"> <i class="fa fa-print"></i>  </a>
                           </td>
                       </tr>
                       @endforeach
                       </tbody>

                   </table>
                </div>
            </div>
        </div>
    </div>


@endsection
