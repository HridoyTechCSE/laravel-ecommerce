@extends('backend.layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Pending Orders</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Pending Orders</li>
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
                                <h3>Pending Orders List</h3>



                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Serial No</th>
                                        <th>Order No</th>
                                        <th>Total Amount</th>
                                        <th>Payment Type</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $key => $order)

                                        <tr>
                                            <td>{{$key+1}}</td>

                                            <td>{{$order->order_no}}</td>
                                            <td>{{$order->order_total}}</td>
                                            <td>
                                                {{$order['payment']['payment_method']}}
                                                @if($order['payment']['payment_method']=='bkash')
                                                    (Transaction no :{{$order['payment']['transaction_no']}} )
                                                @endif
                                            </td>


                                            <td>
                                                @if($order->status=='0')
                                                    <span style="background: #dd4F42;padding:5px;color: #fff" >Unapproved</span>
                                                @elseif($order->status=='1')
                                                    <span style="background: #dd4F42;padding:5px;color: #fff" >Approved</span>
                                                @endif
                                            </td>
                                            <td>

                                                <a href="{{route('orders.approve',$order->id)}}" id="aproveProduct" title="Approve Product" style="cursor: pointer" class="btn btn-sm btn-success"><i class="fa fa-check"></i></a>

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
    <script>
        $(function(){
            $(document).on('click','#aproveProduct',function (e){
                e.preventDefault();
                var link = $(this).attr("href");
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You want to approve this Product",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Approve it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link;
                        Swal.fire(
                            'Approve!',
                            'Your file has been Approved.',
                            'success'
                        )
                    }
                })
            }) ;
        });
</script>
@endsection
