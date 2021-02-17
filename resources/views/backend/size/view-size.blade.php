@extends('backend.layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Size</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Size</li>
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
                                <h3>Size List</h3>

                                <a class="btn btn-success float-right" href="{{route('sizes.add')}}"> <i class="fa fa-plus-circle"></i>Add Size </a>

                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Size Name</th>


                                        <th> Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allData as $key => $size)
                                        @php
                                            $count_size = App\Model\ProductSize::where('size_id',$size->id)->count();

                                        @endphp
                                        <tr>
                                            <td>{{$key+1}}</td>

                                            <td>{{$size->name}}</td>


                                            <td><a href="{{route('sizes.edit',$size->id)}}" title="Edite" style="cursor: pointer" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                                @if($count_size<1)
                                                <a href="{{route('sizes.delete',$size->id)}}" id="delete" title="Edite" style="cursor: pointer" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                @endif
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
