@extends('backend.layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage category</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">category</li>
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

                                <h3>
                                    @if(isset($editData))
                                        Edit Category
                                    @else

                                    Add category
                                    @endif
                                </h3>
                                <a class="btn btn-success float-right" href="{{route('categories.view')}}"> <i class="fa fa-list"></i> category List</a>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{(@$editData)?route('categories.update',$editData->id):route('categories.store')}}" method="post" id="addCategory" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">



                                        <div class="form-group col-md-6">
                                            <label for="description">Category Name</label>
                                            <input type="text" name="name" value="{{@$editData->name}}" class="form-control" placeholder="Write category name">

                                        </div>




                                        <br>


                                        <div class="form-group col-md-7">

                                            <button type="submit" class="btn btn-primary">{{(@$editData)?"Update":"Submit"}}</button>
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

     <script type="text/javascript">
          $(document).ready(function () {

              $('#addCategory').validate({
                  rules: {
                      name: {
                          required: true,
                      },
                  },
                  messages: {

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
