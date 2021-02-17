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
                        <li><a href="">My Orders</a></li>
                    </ul>
                </div>
                <div class="col-md-10">
                   <h>Password Change</h>

                    <form action="{{route('customer.password.update')}}" method="post" id="passCng">
                        @csrf
                        <div class="form-row">


                            <div class="form-group col-md-4">
                                <label for="current_password">Current Password</label>
                                <input type="password" name="current_password" id="current_password" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="new_password">New Password</label>
                                <input type="password" name="new_password" id="new_password" class="form-control">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="again_new_password">again new password</label>
                                <input type="password" name="again_new_password"  class="form-control">
                            </div>

                            <div class="form-group col-md-6">

                                <input type="submit" value="Update" class="btn btn-primary">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- /.content-wrapper -->
    <script type="text/javascript">
        $(document).ready(function () {

            $('#passCng').validate({
                rules: {

                    current_password: {
                        required: true,

                    },

                    new_password: {
                        required: true,
                        minlength: 5
                    },
                    again_new_password: {
                        required: true,
                        equalTo: "#new_password"
                    },

                },
                messages: {

                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    new_password: {
                        required: "Please provide a password",
                        equalTo:  "this password doesnot match"
                    },
                    again_new_password: {
                        required: "Please provide a password",
                        equalTo:  "this password doesnot match"
                    },

                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });

    </script>

@endsection
