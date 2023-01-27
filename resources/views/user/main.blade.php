@extends("user.home")

@section("content")
 <!-- ***** Preloader Start ***** -->
 <div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="container-fluide banner header-text " style="margin: auto 6%" >
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin-top:100px">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="../assets/images/slider1.jpg" alt="First slide">
        <div class="carousel-caption"  style="font-size: 40px;">
          <h1 style="margin-top: -200px">احصل على افضل وارقى المنتجات</h1>
          <p>اشتري الان ولا تتردد</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../assets/images/slider3.jpg" alt="Second slide">
        <div class="carousel-caption"  style="font-size: 40px;">
          <h1 style="margin-top: -200px">احصل على افضل وارقى المنتجات</h1>
          <p>اشتري الان ولا تتردد</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../assets/images/slider2.png" alt="Third slide">
        <div class="carousel-caption"  style="font-size: 40px;">
          <h1 style="margin-top: -200px">احصل على افضل وارقى المنتجات</h1>
          <p>اشتري الان ولا تتردد</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- Banner Ends Here -->



<!-- sales Starts Here -->
<div id="sales" dir="rtl">
      <div dir="rtl" class="container justify-content-center align-items-center mt-5" style="margin-bottom:140px ">
        <div dir="rtl" class="" style="margin-top:100px ; margin-bottom: 35px; ">
          <h2>العروضات</h2>
          <div style="border-bottom: 1px solid red; margin-top: 15px"></div>
        </div>
      <div class="row ">
      <div class="col">
      <div class="card" style="width: 21rem;">
        <img class="card-img-top" src="../assets/images/InkedScreenshot 2022-06-16 095038.jpg" alt="Card image cap" style="width: 272px; height: 240px;">
        <div class="card-body">
          <p class="card-text">خصم 30% </p>
        </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 21rem;">
          <img class="card-img-top" src="../assets/images/InkedScreenshot 2022-06-16 103040.jpg" alt="Card image cap" style="width: 272px; height: 240px;">
          <div class="card-body">
          <p class="card-text">خصم 30% </p>
        </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 21rem;">
          <img class="card-img-top" src="../assets/images/InkedScreenshot 2022-06-16 095247.jpg" alt="Card image cap" style="width: 272px; height: 240px;">
          <div class="card-body">
          <p class="card-text">خصم 30% </p>
        </div>
        </div>
      </div>
      </div>
      </div>
</div>



  <div id="newproduct" class="wrap-function-info" style="background-color: #d3ecfb  ">
    <div class="container-fluide">
      <ul>
        <li class="fc-info-item">
          <i class="fa fa-truck" aria-hidden="true"></i>
          <div class="wrap-left-info">
            <h4 style="color: #DD2C00 " class="fc-name">توصيل مجاني</h4>
            <p class="fc-desc">توصيل مجاني عند شراء أكثر من 50 $</p>
          </div>

        </li>

        <li class="fc-info-item">
          <i class="fa fa-shield" aria-hidden="true"></i>
          <div class="wrap-left-info">
            <h4 style="color: #DD2C00 " class="fc-name">التسوق الآمن</h4>
            <p class="fc-desc">التسوق عبر الإنترنت بأمان</p>
          </div>

        </li>
        <li class="fc-info-item">
          <i class="fa fa-recycle" aria-hidden="true"></i>
          <div class="wrap-left-info">
            <h4 style="color: #DD2C00 " class="fc-name">ضمان</h4>
            <p class="fc-desc">يعود لك المال بعد 30 يوما</p>
          </div>

        </li>
        <li class="fc-info-item">
          <i class="fa fa-life-ring" aria-hidden="true"></i>
          <div class="wrap-left-info">
            <h4 style="color: #DD2C00 " class="fc-name">استرداد مجاني</h4>
            <p class="fc-desc">يمكنك إرجاع المنتج مرة أخرى</p>
          </div>

        </li>
      </ul>
    </div>
  </div>
   <!-- sales ends Here -->
<div class="container" style="margin-top: 100px; margin-bottom: 20px ; text-align: right" >
  <h2>منتجات جديدة</h2>
  <div style="border-bottom: 1px solid red; margin-top: 15px"></div>

</div>

@include('user.product')




{{-- <div class="best-features">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>About Sixteen Clothing</h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="left-content">
          <h4>Looking for the best products?</h4>
          <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent">This template</a> is free to use for your business websites. However, you have no permission to redistribute the downloadable ZIP file on any template collection website. <a rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info.</p>
          <ul class="featured-list">
            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
            <li><a href="#">Consectetur an adipisicing elit</a></li>
            <li><a href="#">It aquecorporis nulla aspernatur</a></li>
            <li><a href="#">Corporis, omnis doloremque</a></li>
            <li><a href="#">Non cum id reprehenderit</a></li>
          </ul>
          <a href="about.html" class="filled-button">Read More</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="right-image">
          <img src="assets/images/feature-image.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</div> --}}


<div class="call-to-action" >
  <div class="container " >
          <div class="inner-content"  style="background-color: #c2e8ff; height: 450px">
          <div dir="" class="row" style="margin-top: 70px">
            <div  class="col-lg-6">
              <h1>اطلب الآن</h1><br/>
                <h2><em>توصيل محلي</em> </h2>
              <p class="mt-4">منتجاتنا وجميع المستلزمات التي تحتاجها متوفرة من خلال متجرنا وستكون جاهزة للاستلام في أي وقت تريده. ما عليك سوى اختيار طلبك والنظام الخاص بك وسوف تكون على استعداد ليتم انتقاؤها في الباب الخاص بك.</p>
              <a href="{{url('/ourproduct')}}" class="filled-button mt-5" style="background-color: #DD2C00 ;font-size: 20px">تسوق الآن</a>

            </div>
            <div class="col-lg-6">
              <img class="" width="500px" height="280px" src="../assets/images/shopnow.png" alt="Card image cap">

            </div>
          </div>
       </div>
   </div>
</div>

<div>
  <div class="container justify-content-center align-items-center mt-5" style="margin-bottom:160px ">
    <div class="" style="margin-top:100px ; margin-bottom: 35px; ">
      <h2>المنتجات القادمة</h2>
      <div style="border-bottom: 1px solid red; margin-top: 15px"></div>
    </div>
    <div class="row ">
        @foreach ($upcoming_product as $product )
                <div class="col">
                    <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="/productimage/{{$product->image}}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="ml-1" style="color: rgb(195, 22, 22)">{{$product->title}}</h4>
                            <p class="card-text">{{$product->description}}</p>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
</div>
@endsection
