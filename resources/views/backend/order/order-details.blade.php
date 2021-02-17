@extends('backend.layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Approved Orders details</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Approved Orders</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-md-12 connectedSortable">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="card">
                            <div class="card-header">
                                <h3> Orders Details</h3>
                                <a class="btn btn-success float-right" href="{{route('orders.approved.list')}}"> <i class="fa fa-plus-circle"></i>Order Approve List </a>


                            </div><!-- /.card-header -->
                            <div class="card-body">
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
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->



                    </section>
                    <!-- /.Left col -->

                    <!-- right col -->
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
