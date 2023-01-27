<div class="latest-products" style="margin-top: 0px">
      <div class="container">
      @if(Session('msg'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{Session('msg')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
             <form action="{{url('search')}}" method="get" class="form-inline mt-5 mb-3" style="float: right; padding: 10px">
            @csrf
            <input class="form-control mr-sm-1" type="search" name="search" placeholder="ابحث" aria-label="Search">
            <button style="background-color: #DD2C00 ;color: white; border: none" class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Search" class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i>
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
