<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style type="text/css">
       .mytable tr td{
           padding: 10px;
       }
    </style>
</head>
<body>


<center>
    <table class="txt-center mytable" width="900px" border="1">
        <tr style="text-align: center;">
            <td width="30%">
                <img src="{{url('public/upload/logo_images/'.$logo->image)}}" style="width: 150px" alt="img-logo">
            </td>

            <td width="40%">
                <h4><strong>Furnish Furniture</strong></h4>
                <span><strong>Mobile no: </strong>{{$contact->mobile_no}}</span><br>
                <span><strong>Address: </strong>{{$contact->address}}</span><br>
            </td>

            <td width="30%">

                <strong>Order no: # {{$order->order_no}}</strong>
            </td>
        </tr>

        <tr>
            <td><strong>Billing Info: </strong></td>
            <td colspan="2" style="text-align: left;">
                <strong>Name :</strong>{{$order['shipping']['name']}}
                <strong>Mobile no :</strong>{{$order['shipping']['mobile_no']}}<br>
                <strong>Email :</strong>{{$order['shipping']['email']}}
                <strong>Address :</strong>{{$order['shipping']['address']}}<br>
                <strong>Payment :</strong>
                {{$order['payment']['payment_method']}}
                @if($order['payment']['payment_method']=='bkash')
                    (Transaction no :{{$order['payment']['transaction_no']}} )
                @endif<br>
            </td>
        </tr>
        <tr>
            <td colspan="3"> <strong>Order Details</strong> </td>
        </tr>
        <tr>
            <td> <strong>Product name & Image</strong> </td>
            <td> <strong>Color & Size</strong> </td>
            <td> <strong>Quality & Price</strong> </td>
        </tr>

        @foreach($order['order_details'] as $details)
            <tr>
                <td><img src="{{url('public/upload/product_images/'.$details['product']['image'])}}" style="width: 123px;" alt=""></td>
                <td>{{$details['color']['name']}} & {{$details['size']['name']}}</td>
                <td> @php

                        $sub_total = $details->quantity*$details['product']['price'];
                    @endphp

                    {{$details->quantity}} x {{$details['product']['price']}} = {{$sub_total}} Tk


                </td>
            </tr>

        @endforeach

        <tr>
            <td colspan="2" style="text-align: right"> <strong>Grand Total</strong> </td>
            <td> <strong>{{$order->order_total}}</strong> </td>
        </tr>


    </table>
</center>
</body>
</html>
