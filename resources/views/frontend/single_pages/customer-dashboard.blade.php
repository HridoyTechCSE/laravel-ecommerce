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
          Customer Dashboard
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
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">

                                    <div class="img-circle">
                                        <img class="profile-user-img img-fluid img-circle"
                                             src="{{(!empty($user->image))?url('public/upload/user_images/'.$user->image):url('public/upload/no_image.png')}}"
                                             alt="User profile picture">
                                        <h3 class="text-center">{{$user->name}}</h3>
                                        <p class="text-center">{{$user->address}}</p>
                                    </div>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>Mobile No</td>
                                                <td>{{$user->mobile}}</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>{{$user->email}}</td>
                                            </tr>
                                            <tr>
                                                <td>Gender</td>
                                                <td>{{$user->gender}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="{{route('customer.edit.profile')}}" class="btn btn-primary btn-block">Edit Profile</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>


@endsection
