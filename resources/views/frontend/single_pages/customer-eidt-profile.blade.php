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
                        <li><a href="{{route('dashboard')}}">My profile</a></li>
                        <li><a href="{{route('customer.password.change')}}">Password Change</a></li>
                        <li><a href="">My Orders</a></li>
                    </ul>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <form action="{{route('customer.update.profile')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Full Name</label>
                                    <input type="text" name="name" value="{{$editData->name}}" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Email</label>
                                    <input type="email" name="email" value="{{$editData->email}}" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="">mobile</label>
                                    <input type="text" name="mobile" value="{{$editData->mobile}}" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="">Address</label>
                                    <input type="text" name="address" value="{{$editData->address}}" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="">Gender</label>
                                    <select name="gender" class="form-control" id="">
                                        <option value="">Select Gender</option>
                                        <option value="Male" {{($editData->gender=="Male")?"selected":""}}>Male</option>
                                        <option value="Female" {{($editData->gender=="Female")?"selected":""}} >Female </option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="image">image</label>
                                    <input type="file" name="image" id="src"  class="form-control">
                                </div>
                                <div class="form-group col-md-12" >
                                    <img id="target" src="{{(!empty($editData->image))?url('public/upload/user_images/'.$editData->image):url('public/upload/no_image.png')}}" alt="" style="width: 150px; height: 150px;">
                                </div>

                                <div class="form-group col-md-12">

                                    <button type="submit" class="btn btn-primary">Profile Update</button>
                                </div>


                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
