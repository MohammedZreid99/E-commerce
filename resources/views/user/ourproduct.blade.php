@extends("user.home")
@section("content")

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      {{-- <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div> --}}
    </div>
    <!-- Banner Ends Here -->
    <div  class="container" style="margin-top: 140px; margin-bottom: -20px" >
      <div class="d-flex justify-content-between">
      <h2 style="font-size:30px" >جميع منتجاتنا </h2>
      <div class="">
        <button style=" box-shadow:  4px 7px 9px 0px #621010;
        background-color: #e03d14;
        padding: 8px;
        border-radius: 13px;
        font-weight: 600;
        color: white;
        align-items: center
        " type="button" class="btn"  data-bs-toggle="modal" data-bs-target="#specialOrder">
          طلبية خاصة <i style="font-size: 20px" class="fa fa-plus-square-o" aria-hidden="true"></i>


        </button>

        <div  class="modal fade mt-5" id="specialOrder" tabindex="-1" aria-labelledby="specialOrder" aria-hidden="true">
          <div style="margin-top: 100px"class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="specialOrder">طلبية خاصة <i class="fa fa-cart-plus" aria-hidden="true"></i>
                </h5>
               </div>
              <form action="{{url('sendspecialorder')}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="modal-body">
                  <div class="mb-3">
                    <label for="linnkkk" class="form-label">الرابط</label>
                    <input type="text" class="form-control" id="linnkkk" name="link" >
                  </div>
                  <div class="mb-3">
                    <label for="quan" class="form-label">الكمية</label>
                    <input type="text" class="form-control" id="quan" name="quantity" >
                  </div>
                  <div class="mb-3">
                    <label for="detail" class="form-label">تفاصيل اخرى</label>
                    <input type="text" class="form-control" id="detail" name="details" >
                  </div>
                  <div class="mb-3">
                    <label for="immm" class="form-label">صورة للمنتج</label>
                    <input style="color: white" type="file" id="immm" name="file" >
                  </div>
                  <button style="background-color: #DD2C00;" type="submit" class="btn btn-primary">تاكيد الطلبية</button>
              </div>
            </form>

            </div>
          </div>
</div>
      </div>
    </div>
      <div style="border-bottom: 1px solid red; margin-top: 15px"></div>
    <div class="mt-4">
        <button style=" box-shadow:  4px 7px 9px 0px #621010;
        background-color: #e03d14;
        padding: 8px;
        border-radius: 13px;
        font-weight: 600;
        color: white;
        margin-top: -15px" type="button" class="btn"  data-bs-toggle="modal" data-bs-target="#exampleModal">
          العمل كمورد

        </button><i style="font-size: 40px" class="fa fa-cart-plus mr-3" aria-hidden="true"></i>

        <div  class="modal fade mt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div style="margin-top: 100px"class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">العمل كمورد <i class="fa fa-cart-plus" aria-hidden="true"></i>
                </h5>
               </div>
              <form action="{{url('becomevendor')}}" method="post">
                @csrf
              <div class="modal-body">

                  <div class="mb-3">
                    <label for="Nameee" class="form-label">الاسم</label>
                    <input type="text" class="form-control" id="Nameee" name="name" >
                  </div>
                  <div class="mb-3">
                    <label for="phoneee" class="form-label">رقم الهاتف</label>
                    <input type="" class="form-control" id="phoneee" name="phone" >
                  </div>
                  <div class="mb-3">
                    <label for="emailll" class="form-label">البريدالالكتروني</label>
                    <input type="email" class="form-control" id="emailll" name="email" >
                  </div>
                  <div class="mb-3">
                    <label for="addd" class="form-label">العنوان</label>
                    <input type="text" class="form-control" id="addd" name="address" >
                  </div>
                  <div class="mb-3">
                    <label for="cattt" class="form-label">الصنف</label>
                    <input type="text" class="form-control" id="cattt" name="category" >
                  </div>
                  <button style="background-color: #DD2C00;" type="submit" class="btn btn-primary">تاكيد</button>

              </div>
            </form>

            </div>
          </div>
</div>
      </div>
      <br>
      <div>
      @if(Session('msg'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{Session('msg')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
        </div>
      <div class="Categorytitle">
        <h4 style="color: whitesmoke">تصنيف المنتجات </h4>
      </div>
      <div class="Categorytypes">
        <ul class="d-flex " style="margin-right: 2%">
          @foreach ($categories as $cat)
            <li  class="mr-3">
              <a  href="{{url("viewcategory/".$cat->name)}}">{{$cat->name}}</a>
            </li>
           @endforeach
        </ul>
      </div>
    </div>
    <div class="latest-products" style="margin-top: 0px">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
             <form action="{{url('search')}}" method="get" class="form-inline mt-5 mb-3" style="float: right; padding: 10px">
            @csrf
            <input class="form-control mr-sm-1" type="search" name="search" placeholder="ابحث" aria-label="Search">
            <button style="background-color: #DD2C00 ;color: white; border: none" class="btn btn-outline-success my-2 my-sm-0" type="submit" value="search" class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i>
            </button>
            </form>
             </div>
          </div>

          @foreach ($data as $product )
            <div class="col-md-3">
              <div class="product-item">
                <img height="280" width="150" src="/productimage/{{$product->image}}" alt="">
                <div class="down-content">
                  <h4>{{$product->title}}</h4>
                  <div class="d-flex">
                  <p class="ml-1" style="color: rgb(195, 22, 22)"> NIS</p>
                  <p style="color: rgb(35, 178, 75); font-weight: 600"> {{$product->price}} </p>
                </div>
                  <p>{{$product->description}}</p>

                <form action="{{url('addcart',$product->id)}}" method="post">
                  @csrf
                  <input type="number" value="1" min="1" class="form-control mb-3" style=" width: 80px" name="quantity">
                  <input style="background-color: #DD2C00; border: none " class="btn btn-primary" type="submit" value="أضف الى السلة">
                </form>
                </div>
              </div>
            </div>
          @endforeach
@if (method_exists($data,'links'))


          <div style="background-color: #DD2C00" class="d-flex justify-content-center">
                {!! $data->links() !!}
          </div>

          @endif

        </div>
      </div>
    </div>



   @endsection
