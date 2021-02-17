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
                                <h3>contact List</h3>

                                <a class="btn btn-success float-right" href="{{route('contact.add')}}"> <i class="fa fa-plus-circle"></i>Add contact </a>

                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Address</th>
                                        <th> Mobile Number</th>
                                        <th> email</th>
                                        <th> facebook</th>
                                        <th> twitter</th>
                                        <th> youtube</th>
                                        <th> google plus</th>

                                        <th> Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allData as $key => $contact)
                                        <tr>
                                            <td>{{$key+1}}</td>

                                            <td>{{$contact->address}}</td>
                                            <td>{{$contact->mobile_no}}</td>
                                            <td>{{$contact->email}}</td>
                                            <td>{{$contact->facebook}}</td>
                                            <td>{{$contact->twitter}}</td>
                                            <td>{{$contact->youtube}}</td>
                                            <td>{{$contact->google_plus}}</td>

                                            <td><a href="{{route('contact.edit',$contact->id)}}" title="Edite" style="cursor: pointer" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                                <a href="{{route('contact.delete',$contact->id)}}" id="delete" title="Edite" style="cursor: pointer" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
