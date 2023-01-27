@extends("user.home")
@section("content")
<div class="page-heading contact-heading header-text"  style=" position: relative">
  <div  style="background-color: rgba(0, 0, 0, 0.587); position: absolute; top: 0; width: 100%; height: 100%;">
  </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4 style="color: #dd2c00">تواصل معنا</h4>
            <h2 style="color: rgb(243, 239, 239)">ابقى على تواصل</h2>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="find-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>موقعنا</h2>
          </div>
        </div>
        <div class="col-md-8">
<!-- How to change your own map point
  1. Go to Google Maps
  2. Click on your location point
  3. Click "Share" and choose "Embed map" tab
  4. Copy only URL and paste it within the src="" field below
-->
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27211.459551815788!2d34.429337600000004!3d31.512280699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fd7f405b256d2b%3A0xb9c1e848050d3493!2z2KfZhNis2KfZhdi52Kkg2KfZhNil2LPZhNin2YXZitipINmB2Yog2LrYstip!5e0!3m2!1sar!2s!4v1655121287865!5m2!1sar!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="col-md-4">
          <div class="left-content">
            <h4>عن مكتبنا</h4>
            <p> ومع ذلك ، فإنه يعتبر أيضا خدمة تحصيل عندما يقوم العملاء بتسليم بريدهم الصادر والمدفوع مسبقا ، والذي يكون جاهزا ومتاحا ، إلى شركة نقل أو موظف آخر معين أثناء أداء هذا الموظف لواجبات التسليم والتحصيل العادية.</p>
            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i>
              </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="send-message">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>ارسل لنا رسالة</h2>
          </div>
        </div>
        <div class="col-md-8 p-5"  style="background-color: #bfdded; border-radius: 10px">
          <div class="contact-form">
            <form id="contact" action="{{url('contactus')}}" method="post">
            @csrf
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <fieldset>
                    <input name="subject" type="text" class="form-control" id="subject" placeholder="الموضوع" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="messagecontent" rows="6" class="form-control" id="message" placeholder="نص الرسالة التي تريد ارسالها" required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button style="background-color: #dd2c00" type="submit" id="form-submit" class="filled-button">ارسال الان </button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-4">
          <ul class="accordion">
            <li>
                <a>هل لديك أي اقتراحات</a>
                <div class="content">
                    <p>ونحن سوف نلقي نظرة على الاقتراحات التي قدمتها لنا وتعطيك ردود الفعل</p>
                </div>
            </li>
            <li>
                <a>هل لديك أي إضافات على موقعنا</a>
                <div class="content">
                    <p>إذا كان لديك أي إضافات تحتاجها على الموقع ، فيمكننا العمل عليها وإطلاق تحديثات جديدة</p>
                </div>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="happy-clients">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Our Happy Customers</h2>
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