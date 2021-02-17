@extends('frontend.layouts.master')
@section('content')

    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{asset('public/frontend')}}/images/bg-01.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            Customer Billing Information
        </h2>
    </section>


    <div class="about-content">
        <div class="container">
            <form action="{{route('customer.checkout.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Full Name</label>
                        <input type="text" name="name"  class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Email</label>
                        <input type="email" name="email"  class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label for="">mobile</label>
                        <input type="text" name="mobile_no"  class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label for="">Address</label>
                        <input type="text" name="address" class="form-control">
                    </div>




                    <div class="form-group col-md-12">

                        <button type="submit" class="btn btn-primary"> Submit</button>
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


@endsection
