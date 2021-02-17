@extends('backend.layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">product</li>
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
                                        Edit product
                                    @else

                                        Add product
                                    @endif
                                </h3>
                                <a class="btn btn-success float-right" href="{{route('products.view')}}"> <i class="fa fa-list"></i> product List</a>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{(@$editData)?route('products.update',$editData->id):route('products.store')}}" method="post" id="addCategory" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">


                                        <div class="form-group col-md-4">
                                            <label for=""> Category</label>
                                            <select name="category_id" id="" class="form-control">
                                                <option value="">Select Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}" {{(@$editData->category_id==$category->id)?"selected":""}}>{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for=""> Brand</label>
                                            <select name="brand_id" id="" class="form-control">
                                                <option value="">Select Brand</option>
                                                @foreach($brands as $brand)
                                                    <option value="{{$brand->id}}" {{(@$editData->brand_id==$brand->id)?"selected":""}}>{{$brand->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group col-md-4">
                                            <label for="description">Product Name</label>
                                            <input type="text" name="name" value="{{@$editData->name}}" class="form-control" placeholder="Write product name">

                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="">Color</label>
                                            <select name="color_id[]" id="" class="form-control select2" multiple="">
                                                <option value="">Select Color</option>
                                                @foreach($colors as $color)
                                                    <option value="{{$color->id}}" {{(@in_array(['color_id'=>$color->id],$color_array))?"selected":""}}>{{$color->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="">Size</label>
                                            <select name="size_id[]" id="" class="form-control select2" multiple="">
                                                <option value="">Select Color</option>
                                                @foreach($sizes as $size)
                                                    <option value="{{$size->id}}" {{(@in_array(['size_id'=>$size->id],$size_array))?"selected":""}}>{{$size->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label >Short Description</label>
                                            <textarea  name="short_desc"  class="form-control" >{{@$editData->short_desc}}</textarea>

                                        </div>

                                        <div class="form-group col-md-12">
                                            <label >Long Description</label>
                                            <textarea  name="long_desc"  class="form-control" rows="4">{{@$editData->long_desc}}</textarea>

                                        </div>

                                        <div class="form-group col-md-4">
                                            <label >Price</label>
                                            <input type="number" name="price" value="{{@$editData->price}}" class="form-control" >

                                        </div>

                                        <div class="form-group col-md-4">
                                            <label >Image</label>
                                            <input type="file" name="image" id="src" class="form-control" >

                                        </div>
                                        <div class="form-group col-md-4">

                                            <img id="target" src="{{(!empty($editData->image))?url('public/upload/product_images/'.$editData->image):url('public/upload/no_image.png')}}" style="width: 123px" alt="">

                                        </div>


                                        <div class="form-group col-md-4">
                                            <label >Sub Image</label>
                                            <input type="file" name="sub_image[]"  class="form-control" multiple>

                                        </div>


                                        <br>


                                        <div class="form-group col-md-12">

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
                    category_id: {
                        required: true,
                    },
                    brand_id: {
                        required: true,
                    },
                    short_desc: {
                        required: true,
                    },
                    long_desc: {
                        required: true,
                    },
                    price: {
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
