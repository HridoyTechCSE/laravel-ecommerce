@extends('backend.layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage communicate</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">communicate</li>
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
                                <h3>communicate List</h3>

                                <a class="btn btn-success float-right" href="{{route('contact.add')}}"> <i class="fa fa-plus-circle"></i>Add communicate </a>

                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>name</th>
                                        <th> address</th>
                                        <th> email</th>
                                        <th> mobile no</th>
                                        <th> Message</th>


                                        <th> Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($alldata as $key => $communicate)
                                        <tr>
                                            <td>{{$key+1}}</td>

                                            <td>{{$communicate->name}}</td>
                                            <td>{{$communicate->address}}</td>
                                            <td>{{$communicate->email}}</td>
                                            <td>{{$communicate->mobile_no}}</td>

                                            <td>{{$communicate->msg}}</td>


                                            <td>
                                                <a href="{{route('contact.communicate.delete',$communicate->id)}}" id="delete" title="Edite" style="cursor: pointer" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
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
