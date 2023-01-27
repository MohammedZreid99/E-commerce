<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
        table{
          background: linear-gradient(180deg, rgb(221 172 172), rgb(234 234 234 / 94%));
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
    <title>View customer</title>
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
            <div class="container" align="center">
            <form action="{{url('searchcustomer')}}" method="post" class="form-inline m-5" style="float: right; padding: 10px">
              @csrf
                <input class="form-conntrol" type="search" name="search" placeholder="search customer by name">
              <input style="height: 34px; background-color: #d00606" type="submit" value="search" class="btn btn-success">
            </form>
                {{-- <table>
                    <tr style="background-color: gray">
                        <td style="padding: 20px">Customer name</td>
                        <td style="padding: 20px">Phone</td>
                        <td style="padding: 20px">Address</td>
                        <td style="padding: 20px">email</td>
                    </tr>
@foreach ($users as $user)
        <tr align="center">
            <td style="padding: 20px">{{$user->name}}</td>
            <td style="padding: 20px">{{$user->phone}}</td>
            <td style="padding: 20px">{{$user->address}}</td>
            <td style="padding: 20px">{{$user->email}}</td>
        </tr>
@endforeach
                    


                </table> --}}


                <div class="container mt-5">
                  <table class="table table-striped" style="text-align: center">
                      <thead>
                      <tr>
                           <th scope="col" width="10%">Customer name</th>
                          <th scope="col" width="15%">Phone</th>
                          <th scope="col" width="10%">Address</th>
                          <th scope="col" width="10%">email</th>
                       
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
                               <tr>
                                  <td scope="row">{{$user->name}}</td>
                                  <td>{{$user->phone}}</td>
                                  <td>{{$user->address}}</td>
                                  <td>{{$user->email}}</td>
                                
                              </tr>
                           @endforeach
                      </tbody>
                  </table>
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