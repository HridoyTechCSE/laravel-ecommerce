@extends('frontend.layouts.master')
@section('content')

    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{asset('public/frontend')}}/images/bg-01.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            Customer Login
        </h2>
    </section>


    <div id="login">

        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-for" class="form" action="{{route('login')}}" method="post">
                            @csrf
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Email:</label><br>
                                <input type="email" name="email" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">

                                <input type="submit" name="submit" class="btn btn-info btn-md text-uppercase text-bold text-center" value="login">
                                <i class="fa fa-user"></i> No accout yet ? <a href="{{route('customer.signup')}}"> <span>Signup New Account</span> </a>
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
