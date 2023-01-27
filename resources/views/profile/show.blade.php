<!DOCTYPE html>
<html dir="rtl" lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" type="text/css" href="{{ asset('path/to/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
 
    <title>GC Store</title>

    <!-- Bootstrap core CSS -->
 <!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->

     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/templatemo-sixteen.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.css') }}">

 
  </head>

  
    <!-- Header -->
    <header class="">
      <nav dir="ltr" class="navbar navbar-expand-lg">
        <div class="container" style="max-width: 1280px">
          <a class="navbar-brand" href="/"><img src="../assets/images/GC2.png" width="150px" height="80px"/></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div  dir="rtl" class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto" >
              <li class="nav-item active">
                <a class="nav-link" href="/">الرئيسية
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li  class="nav-item">
                <a class="nav-link" href="{{url('/ourproduct')}}">منتجاتنا</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/aboutus')}}">من نحن</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/contactus')}}">تواصل معنا</a>
              </li>
             {{-- <li class="nav-item">
              @if (Route::has('login'))
              <div>
                     @auth
                     <li class="nav-item">
                      <a class="nav-link" href="{{url('showcart')}}">
                        <i class="fa fa-shopping-cart mr-2" aria-hidden="true"></i>السلة[{{$count}}]</a>
                    </li>
                           <x-app-layout>
                            </x-app-layout>
                     @else
                    <li class="ml-5 ml-0">    <a class="nav-link" href="{{ route('login') }}">تسجل دخول</a> </li>

                        @if (Route::has('register'))
                        <li>     <a class="nav-link" href="{{ route('register') }}">انشاء حساب</a> </li>
                        @endif
                    @endauth
             @endif
                </li> --}}
                <li class="nav-item">
                  <form action="{{url('search')}}" method="get" class="form-inline mt-3 mb-3 mr-4" style="float: right;">
                    @csrf
                    <input class="form-control mr-sm-1" type="search" name="search" placeholder="ابحث" aria-label="Search">
                    <button style="background-color: #d62b00 ;color: white; border: none" class="btn btn-outline-success my-2 my-sm-0" type="submit" value="search" class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                    </form>
                </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

  <body>

<x-app-layout >
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot> --}}

    <div style="margin-top: 40px;
    background-image: linear-gradient(to top, #c19b9b , #83c3d9);">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div  class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif

            {{-- <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div> --}}

            {{-- @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif --}}
        </div>
    </div>
</x-app-layout>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/accordions.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<script language = "text/Javascript"> 
  cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
  function clearField(t){                   //declaring the array outside of the
  if(! cleared[t.id]){                      // function makes it static and global
      cleared[t.id] = 1;  // you could use true and false, but that's more typing
      t.value='';         // with more chance of typos
      t.style.color='#fff';
      }
  }
</script>


</body>

<footer class="footer">
<div class="container">
    <div class="row">


        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer-about">
                <div class="footer-logo" style="margin-top: -15px ">
<a href="/"><img src="../assets/images/GC2.png" width="180px" height="100px"/> </a>
                    {{-- <a href="#"><img src="img/footer-logo.png" alt=""></a> --}}
                </div>
                <p dir="rtl">العميل هو في قلب نموذج أعمالنا الفريد ، والذي يتضمن التصميم.</p>
                <a href="#"><img src="img/payment.png" alt=""></a>
            </div>
        </div>
         <div dir="rtl" class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
            <div class="footer-widget">
                <h6>الشراء</h6>
                <ul>
                    <li><a href="#">ملابس</a></li>
                    <li><a href="#">الأحذية</a></li>
                    <li><a href="#">اكسسوارات</a></li>
                    <li><a href="#">تخفيضات</a></li>

                </ul>
            </div>
        </div>

        <div dir="rtl" class="col-lg-2  col-md-3 col-sm-6">
            <div class="footer-widget">
                <h6>لينك</h6>
                <ul>
                    <li><a href="{{url('/contactus')}}">تواصل معنا</a></li>
                    <li><a href="{{url('/aboutus')}}">من نحن</a></li>
                    <li><a href="#newproduct">منتجات جديدة</a></li>
                    <li><a href="#sales">تخفيضات</a></li>

                </ul>
            </div>
        </div>

        <div dir="rtl" class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
            <div class="footer-widget">
                <h6>اخر الاخبار</h6> 
                <div  dir="rtl"class="footer-newslatter">
                    <p>الحصول على التحديثات في الوقت المناسب لمعرفة الوافدين الجدد والمبيعات والتخفيضات!</p>
                    <form action="#">
                        <input type="text" placeholder="">
                        <button type="submit"><span><i class="fa fa-envelope"
                                    arial-hidden="true"></i></span></button>
                    </form>
                </div>

            </div>
        </div>

      </div>

     

</div>

</footer>

</html>
