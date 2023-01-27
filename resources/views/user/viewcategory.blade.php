@extends("user.home")

@section("content")

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
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
      </div>
    </div>
    <!-- Banner Ends Here -->
    <div class="container" style="margin-top: 100px; margin-bottom: -20px" >
      <h2 >{{$cat->name}}</h2>
      <div style="border-bottom: 1px solid red; margin-top: 15px"></div>
      <div class="Categorytitle">
      <h4 style="color: whitesmoke">Product Category</h4>
    </div>
      <div class="Categorytypes">
        <ul class="d-flex">
          @foreach ($categories as $cat)
            <li  class="mr-3">
              <a  href="{{url("viewcategory/".$cat->name)}}">{{$cat->name}}</a>
            </li>
           @endforeach
        </ul>
      </div>
    </div>
   @include('user.ourproduct')
   @endsection
