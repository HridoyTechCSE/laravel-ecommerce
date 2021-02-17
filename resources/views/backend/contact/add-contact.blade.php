@extends('backend.layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage contact</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">contact</li>
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
                                <h3>Add contact </h3>
                                <a class="btn btn-success float-right" href="{{route('contact.view')}}"> <i class="fa fa-list"></i> contact List</a>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{route('contact.store')}}" method="post" id="myForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">



                                        <div class="form-group col-md-4">
                                            <label for="address">address</label>
                                            <input type="text" name="address" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="mobile">mobile</label>
                                            <input type="text" name="mobile_no" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="email">email</label>
                                            <input type="text" name="email" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="facebook">facebook</label>
                                            <input type="text" name="facebook" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="twitter">twitter</label>
                                            <input type="text" name="twitter" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="youtube">youtube</label>
                                            <input type="text" name="youtube" class="form-control">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="google_plus">google plus</label>
                                            <input type="text" name="google_plus" class="form-control">
                                        </div>





                                        <br>


                                        <div class="form-group col-md-6">

                                            <input type="submit" value="submit" class="btn btn-primary">
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
