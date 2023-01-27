@extends("user.home")
@section("content")
<div class="page-heading about-heading header-text" style=" position: relative">
  <div  style="background-color: rgba(0, 0, 0, 0.468); position: absolute; top: 0; width: 100%; height: 100%;">
  </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>من نحن</h4>
            <h2 style="color: rgb(239, 235, 235)">G<strong style="color: rgb(227, 29, 29)">C</strong> STORE</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="best-features about-features" style="padding-bottom: 100px">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>معلومات أساسية</h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="right-image">
            <img src="assets/images/aboutus1.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="left-content">
            <h4>ماذا نفعل?</h4>
            <p>نحن هنا في <strong style="font-weight: 700">GC</strong>  متجر نعمل بجد لتقديم المبيعات عبر الإنترنت للأشخاص الذين لديهم مشاكل في التعامل مع بطاقات الدفع الإلكترونية وكذلك أنشأنا هذا الموقع من أجل تسهيل فئة من الناس وتسليم السلع والخدمات التي يحتاجون إليها في أقرب وقت ممكن</p>
            <ul class="social-icons">
              <li style=""><p>Follow us</p></li><br/>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  {{-- <div class="team-members">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Our Team Members</h2>
          </div>
        </div>
        <div class="col-md-4">
          <div class="team-member">
            <div class="thumb-container">
              <img src="assets/images/team_01.jpg" alt="">
              <div class="hover-effect">
                <div class="hover-content">
                  <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="down-content">
              <h4>Johnny William</h4>
              <span>CO-Founder</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="team-member">
            <div class="thumb-container">
              <img src="assets/images/team_02.jpg" alt="">
              <div class="hover-effect">
                <div class="hover-content">
                  <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="down-content">
              <h4>Karry Pitcher</h4>
              <span>Product Expert</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="team-member">
            <div class="thumb-container">
              <img src="assets/images/team_03.jpg" alt="">
              <div class="hover-effect">
                <div class="hover-content">
                  <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="down-content">
              <h4>Michael Soft</h4>
              <span>Chief Marketing</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="team-member">
            <div class="thumb-container">
              <img src="assets/images/team_04.jpg" alt="">
              <div class="hover-effect">
                <div class="hover-content">
                  <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="down-content">
              <h4>Mary Cool</h4>
              <span>Product Specialist</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="team-member">
            <div class="thumb-container">
              <img src="assets/images/team_05.jpg" alt="">
              <div class="hover-effect">
                <div class="hover-content">
                  <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="down-content">
              <h4>George Walker</h4>
              <span>Product Photographer</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="team-member">
            <div class="thumb-container">
              <img src="assets/images/team_06.jpg" alt="">
              <div class="hover-effect">
                <div class="hover-content">
                  <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="down-content">
              <h4>Kate Town</h4>
              <span>General Manager</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}


  <div class="services">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="service-item">
            <div class="icon">
              <i class="fa fa-truck"></i>
            </div>
            <div class="down-content">
              <h4>التسليم المبكر</h4>
              <ul class="stars d-flex mb-3" style="justify-content: center; font-size: 23px; color: gold">
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> 
              </ul>
              <p>لدينا تسليم سريع وسريع لتعطينا انطباعا جيدا لدى العملاء من عملك.</p>
              {{-- <a href="#" class="filled-button">Read More</a> --}}
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-item">
            <div class="icon">
              <i class="fa fa-check-circle" aria-hidden="true"></i>
            </div>
            <div class="down-content">
              <h4>المصداقية</h4>
              <ul class="stars d-flex mb-3" style="justify-content: center; font-size: 23px; color: gold">
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> 
              </ul>
              <p>المصداقية في التعامل مع الخدمات للعملاء من الأمور الأساسية لكسب الولاء من العميل</p>
              {{-- <a href="#" class="filled-button">Details</a> --}}
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-item">
            <div class="icon">
              <i class="fa fa-clock-o"></i>
            </div>
            <div class="down-content">
              <h4>خدمة على مدار الساعة</h4>
              <ul class="stars d-flex mb-3" style="justify-content: center; font-size: 23px; color: gold">
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> 
              </ul>
              <p style="margin-bottom: 50px">نحن نقدم الخدمات في جميع الأوقات لعدم إعاقة الخدمة للعملاء</p>
              {{-- <a href="#" class="filled-button">Read More</a> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  {{-- <div class="happy-clients">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Happy Partners</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div class="owl-clients owl-carousel">
            <div class="client-item">
              <img src="assets/images/client-01.png" alt="1">
            </div>
            
            <div class="client-item">
              <img src="assets/images/client-01.png" alt="2">
            </div>
            
            <div class="client-item">
              <img src="assets/images/client-01.png" alt="3">
            </div>
            
            <div class="client-item">
              <img src="assets/images/client-01.png" alt="4">
            </div>
            
            <div class="client-item">
              <img src="assets/images/client-01.png" alt="5">
            </div>
            
            <div class="client-item">
              <img src="assets/images/client-01.png" alt="6">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

@endsection