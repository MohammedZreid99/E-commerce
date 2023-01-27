<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      table{
        background:linear-gradient(180deg, rgb(221 172 172), rgb(234 234 234 / 94%));
  margin-bottom: 0;
  color: #000000;
  border-radius: 20px;
    }
    table th,td{
        height: 60px;

      }
      table th{
        font-size: 15px !important;
        color: #000000 !important;

       }
  </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>View Messages</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
        @include('admin.sidebar')
      <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            {{--  <div class="container" align="center">
               <table>
                    <tr style="background-color: gray">
                        <td style="padding: 20px">Customer name</td>
                        <td style="padding: 20px">Email</td>
                        <td style="padding: 20px">Subject</td>
                        <td style="padding: 20px">Message</td>
                    </tr>
                      @foreach ($message as $messages)
                        @foreach ($userInfo as $useresInfo)
                          <tr align="center">
                            @if($messages->user_id == $useresInfo->id)
                              <td style="padding: 20px">{{$useresInfo->name}}</td>
                              <td style="padding: 20px">{{$useresInfo->email}}</td>
                              <td style="padding: 20px">{{$messages->subject}}</td>
                              <td style="padding: 20px">{{$messages->message}}</td>
                            @endif  
                          </tr>
                        @endforeach
                      @endforeach
                </table>
                 --}}
                <div class="container mt-5">
                  <table class="table table-striped" style="text-align: center">
                      <thead>
                      <tr>
                           <th scope="col" width="10%">Customer name</th>
                          <th scope="col" width="15%">Email</th>
                          <th scope="col" width="10%">Subject</th>
                          <th scope="col" width="10%">Message</th>
                       
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($message as $messages)
                        @foreach ($userInfo as $useresInfo)
                               <tr>
                                @if($messages->user_id == $useresInfo->id)
                                  <td scope="row">{{$useresInfo->name}}</td>
                                  <td>{{$useresInfo->email}}</td>
                                  <td>{{$messages->subject}}</td>
                                  <td>{{$messages->message}}</td>
                                  @endif  

                              </tr>
                              @endforeach
                              @endforeach
                      </tbody>
                  </table>
            </div>
            </div>
          </div> 
         <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>