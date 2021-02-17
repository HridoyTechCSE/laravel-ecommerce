@extends('frontend.layouts.master')
@section('content')

    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{asset('public/frontend')}}/images/bg-01.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            Email verification form
        </h2>
    </section>


    <div id="login">

        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-everufy" class="form" action="{{route('verify.store')}}" method="post">
                            @csrf
                            <h3 class="text-center text-info">Email Verify</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="" class="text-info">Verify Code:</label><br>
                                <input type="text" name="code" id="code" class="form-control">
                            </div>
                            <div class="form-group">

                                <input type="submit" name="submit" class="btn btn-info btn-md text-uppercase text-bold text-center" value="submit">

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {

            $('#login-everufy').validate({
                rules: {


                    email: {
                        required: true,
                        email:true,
                    },


                    code: {
                        required: true,

                    },


                },
                messages: {


                    email: {
                        required: "Please enter your email",
                        email:"enter valid password",

                    },

                    code: {
                        required: "Please enter verification code",

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
    <style type="text/css">
        #login {
            overflow: hidden;
            background: #17a2b8;
        }
        body {
            margin: 0;
            padding: 0;

            height: 100vh;
        }
        #login-column {
            padding: 89px;
        }
        #login .container #login-row #login-column #login-box {
            margin-top: -18px;
            max-width: 600px;
            height: 387px;
            border: 1px solid #9C9C9C;
            background-color: #EAEAEA;
            border-radius: 11px;
        }
        #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
        }
        #login .container #login-row #login-column #login-box #login-form #register-link {
            margin-top: -85px;
        }
    </style>

@endsection
