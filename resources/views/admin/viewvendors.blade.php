<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      table{
        background: linear-gradient(180deg, rgb(221 172 172), rgb(234 234 234 / 94%));
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
    <title>View Vendors</title>
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
                @if (session('msg'))
                    <div class="alert alert-success">
                    <strong>{{Session('msg')}}</strong>
                    </div>
                @endif
                {{-- <table>
                    <tr style="background-color: gray">
                        <td style="padding: 20px">Vendor name</td>
                        <td style="padding: 20px">Email</td>
                        <td style="padding: 20px">Phone</td>
                        <td style="padding: 20px">Address</td>
                    </tr>
                      @foreach ($vendors as $vendor)
                          <tr align="center">
                              <td style="padding: 20px">{{$vendor->name}}</td>
                              <td style="padding: 20px">{{$vendor->email}}</td>
                              <td style="padding: 20px">{{$vendor->phone}}</td>
                              <td style="padding: 20px">{{$vendor->address}}</td>
                          </tr>
                      @endforeach
                </table>
            </div> --}}
            <form action="{{url('searchvendor')}}" method="post" class="form-inline m-5" style="float: right; padding: 10px">
                @csrf
                  <input class="form-conntrol" type="search" name="search" placeholder="search vendor by name">
                <input  style="height: 34px; background-color: #d00606" type="submit" value="search" class="btn btn-success">
              </form>

            <div class="container mt-5">
              <table class="table table-striped" style="text-align: center">
                  <thead>
                  <tr>
                       <th scope="col" width="10%">Vendor name</th>
                      <th scope="col" width="15%">Email</th>
                      <th scope="col" width="10%">Phone</th>
                      <th scope="col" width="10%">Address</th>
                      <th scope="col" width="10%">Category Provided</th>
                      <th scope="col" width="10%">Accepted</th>

                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($vendors as $vendor)

                           <tr>
                              <td scope="row">{{$vendor->name}}</td>
                              <td>{{$vendor->email}}</td>
                              <td>{{$vendor->phone}}</td>
                              <td>{{$vendor->address}}</td>
                              <td>{{$vendor->category_provided}}</td>
                              @if($vendor->accepted == 1)
                                <td>Accepted</td>
                              @else
                                <td>
                                    <a class="btn btn-success" href="{{url('acceptvendor',$vendor->id)}}">accept</a>
                                    <a class="btn btn-danger" href="{{url('deletevendor',$vendor->id)}}">delete</a>
                                </td>
                              @endif
                          </tr>
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
