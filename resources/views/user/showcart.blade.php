@extends("user.home")
@section("content")

<div style="padding: 200px 100px 200px 100px ;    background-image: linear-gradient(to right, #ffffff , #8fcfe6);" >
      @if (session('msg'))
        <div class="alert alert-success">
          <strong>{{Session('msg')}}</strong>
        </div>
      @endif
      <h1 style="font-size: 39px;    margin: 0px 62px 54px 109px; "> السلة <i style="font-size: 55px; color: #d62b00 "class="fa fa-shopping-cart mr-2" aria-hidden="true"></i></h1>
<div class="d-flex justify-content-between" style="width:85%">
<div style="width: 100% ">
      <table style="    width: 90%;
      text-align: center;
      background-color: #ffffff47;
      box-shadow: 12px 11px 16px 0px grey;" >
        <tr style=" background-color:#d62b00b5">
            <td style="padding: 10px; font-size: 20px;">اسم المنتج</td>
            <td style="padding: 10px; font-size: 20px;">الكمية</td>
            <td style="padding: 10px; font-size: 20px;">السعر</td>
            <td style="padding: 10px; font-size: 20px;">ازالة </td>
        </tr>
        <form action="{{url('order')}}" method="POST">
        @csrf
          @foreach   ($cart as $carts )
            @foreach ($data as $productInfo)
              @if($productInfo->id == $carts->product_id)
                <tr st    yle=" background-color: #d3ecfb; ">
                  <td style="padding: 20px;  border-left: .5px solid black">
                    <input type="text" name="product_id[]" value="{{$productInfo->id}}" hidden>{{$productInfo->title}}
                  </td>
                  <td style="padding: 20px;  border-left: 1px solid black"">
                    <input type="text" name="quantity[]" value="{{$carts->quantity}}" hidden>
                    {{$carts->quantity}}
                  </td>
                  <td style="padding: 10px; color: #12a740; border-left: 1px solid black"">
                    <input type="text" name="price[]" value="{{$carts->price}}" hidden>
                    {{$carts->price}}
                  </td>
                  <td style="padding: 20px; color: white">
                    <a class="btn btn-danger" href="{{url('delete',$carts->id)}}">ازالة <i class="fa fa-trash-o" aria-hidden="true"></i> </a>
                  </td>
                </tr>
              @endif
            @endforeach
          @endforeach
        </table>
        <a style="font-size: 18px ; border:1px solid black" class="btn btn-warning mt-5" href="{{url('ourproduct')}}">اضافة المزيد <i class="fa fa-undo" aria-hidden="true"></i> </a>
      </div>
      <div class="justify-content-around" style="    background: linear-gradient(to right, #d672338c , #d62b00b5);
      border-radius: 3%;
      width: 100%;
      box-shadow: 13px 5px 19px 4px grey;">
                <div style=" padding: 20px" class="d-flex">
                  <label >اجمالي الكمية</label>
                  <input class="mr-3" style="background: inherit ;font-weight: 900; color: white; margin-top: -5px " type="" name="" value="{{$totalQuantity}}" readonly="readonly">
                </div>
                <div style=" padding: 20px" class="d-flex">
                  <label> اجمالي السعر </label>
                  <input  class="mr-3" style="background: inherit  ; font-weight: 900; color: white; width: 10%; margin-top: -5px" type="" name="" value="{{$totalPrice}} " readonly="readonly"><span style="font-weight: 900; color: rgb(4, 152, 12);">NIS</span>
                </div>
                <div style=" padding: 20px">
                <label>اضافة تفاصيل اخرى</label>
             <textarea name="moredetails" class="form-control" placeholder="تفاصيل"></textarea>
            </div>
            <div style=" padding: 20px">
        <button style="font-size: 15px; width: 50%;" class="btn btn-success">تأكيد الطلب و الدفع عند الاستلام <i class="fa fa-check" aria-hidden="true"></i></button>
        {{--<a class="btn btn-danger" href="{{url('ourproduct')}}">ازالة الطلب <i class="fa fa-trash-o" aria-hidden="true"></i> </a>--}}
      </div>
      </div>
      {{--<div>
        <button style="font-size: 15px; width: 95%;" class="btn btn-success">الدفع عند الاستلام<i class="fa fa-check" aria-hidden="true"></i></button>
      </div>--}}
      </form>
      {{--
      <form action="{{url('checkoutCharge')}}" method="get">
        @csrf
        <button style="font-size: 15px; "class="btn btn-danger">By card popup <i aria-hidden="true"></i></button>
    </form>--}}
    </div>
</div>

@endsection
