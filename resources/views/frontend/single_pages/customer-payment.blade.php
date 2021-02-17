@extends('frontend.layouts.master')

@section('content')
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{asset('public/frontend')}}/images/bg-01.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
           Payment Method
        </h2>
    </section>


    <!-- Shoping Cart -->
    <div class="bg0 p-t-75 p-b-85">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12" style="padding-bottom: 30px;">
                    <div class="wrap-table-shopping-cart">
                        <table class="table-shopping-cart">
                            <tr class="table_head">
                                <th class="column-1">Image</th>
                                <th class="column-1">Product Name</th>

                                <th class="column-3">Size</th>
                                <th class="column-3">Color</th>
                                <th class="column-3">Price</th>
                                <th class="column-3">Quantity</th>
                                <th class="column-5">Total</th>
                                <th class="column-5">Action</th>


                            </tr>

                            @php
                                $contents = Cart::content();

                                $total = '0';

                            @endphp

                            @foreach($contents as $content)
                                <tr class="table_row">
                                    <td class="column-1">
                                        <div class="how-itemcart1">
                                            <img src="{{asset('public/upload/product_images/'.$content->options->image)}}" alt="IMG">
                                        </div>
                                    </td>
                                    <td class="column-2">{{$content->name}}</td>
                                    <td class="column-2">{{$content->options->size_name}}</td>
                                    <td class="column-2">{{$content->options->color_name}}</td>
                                    <td class="column-3">{{$content->price}} TK</td>
                                    <td class="column-4">
                                        <form action="{{route('update.cart')}}" method="post">
                                            @csrf
                                            <div>
                                                <input type="number" class="mtext-104 cl3 txt-center num-product form-control sss" id="qty" name="qty"
                                                       value="{{$content->qty}}">
                                                <input type="hidden" name="rowId" value="{{$content->rowId}}">
                                                <input type="submit" value="Update" class="flex-c-m stext-101 cl2 bg8 s888 hov-btn3 p-lr-15 trans-04 pointer
                                        m-tb-10">
                                            </div>
                                        </form>
                                    </td>
                                    <td class="column-5">{{$content->subtotal}} TK</td>
                                    <td class="column-5">
                                        <a href="{{route('delete.cart',$content->rowId)}}" class="cart_quantity_delete btn btn-danger" ><i class="fa
fa-times"></i></a>
                                    </td>

                                </tr>
                                @php
                                    $total += $content->subtotal;


                                @endphp
                            @endforeach

                            <tr>
                                <td colspan="6" style="text-align: right"> <strong>Grand Total = </strong> </td>
                                <td colspan="1" style="text-align: center"> <strong>{{$total}} Tk</strong>  </td>

                            </tr>
                        </table>
                    </div>
                </div>


            </div>


            <div class="row">
                <div class="col-md-4">
                    <h3>Select Payment Method</h3>
                </div>
                <div class="col-md-4">

                    @if(Session::get('message'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>{{Session::get('message')}}</strong>
                        </div>


                    @endif

                    <form action="{{route('customer.payment.store')}}" method="post">
                        @csrf
                        @foreach($contents as $content)

                            <input type="hidden" name="product_id" value="{{$content->id}}">
                        @endforeach


                        <input type="hidden" name="order_total" value="{{$total}}">
                        <label for=""> Payment method</label>
                        <select name="payment_method" id="payment_method" class="form-control">
                            <option value="">Select Payment Type</option>
                            <option value="handcash">Handcash</option>
                            <option value="bkash">Bkash</option>
                        </select>

                        <div class="show_field" style="display: none">
                            <span>Bkash No is: 019238288383</span>
                            <input type="text" name="transaction_no" class="form-control" placeholder="write transation no">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <script type="text/javascript">
        $(document).on('change','#payment_method',function (){
           var payment_method = $(this).val();
           if (payment_method == 'bkash'){
               $('.show_field').show();
           }else {
               $('.show_field').hide();
           }
        });

    </script>

@endsection
