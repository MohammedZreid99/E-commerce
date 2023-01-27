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
    <title>Show Orders</title>
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
        @include('employee.sidebar')
      <!-- partial -->
        @include('employee.navbar')
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
                        <td style="padding: 20px">Customer name</td>
                        <td style="padding: 20px">Phone</td>
                        <td style="padding: 20px">Address</td>
                        <td style="padding: 20px">Product title</td>
                        <td style="padding: 20px">Total Price</td>
                        <td style="padding: 20px">Quantity</td>
                        <td style="padding: 20px">More Details</td>
                        <td style="padding: 20px">Status</td>
                        <td style="padding: 20px">Action</td>

                    </tr>
                    @foreach ($order as $orders)
                      @foreach ($data as $productInfo)
                        @foreach ($userInfo as $useresInfo)
                          <tr align="center">
                            @if($orders->product_id == $productInfo->id)
                              @if($orders->user_id == $useresInfo->id)
                              <td style="padding: 20px">{{$useresInfo->name}}</td>
                              <td style="padding: 20px">{{$useresInfo->phone}}</td>
                              <td style="padding: 20px">{{$useresInfo->address}}</td>
                              <td style="padding: 20px">{{$productInfo->title}}</td>
                              <td style="padding: 20px">{{$orders->total_price}}</td>
                              <td style="padding: 20px">{{$orders->quantity}}</td>
                              <td style="padding: 20px">{{$orders->more_details}}</td>
                              <td style="padding: 20px">{{$orders->status}}</td>
                              <td>
                                <a class="btn btn-success" href="{{url('confirmorder',$orders->id)}}">
                                    Deliver
                                </a>
                                <a class="btn btn-danger" href="{{url('rejectorder',$orders->id)}}">
                                  Reject
                                </a>
                              </td>
                              @endif
                            @endif
                          </tr>
                        @endforeach
                      @endforeach
                    @endforeach
                </table> --}}
                <div class="container mt-5">
                  <table class="table table-striped" style="text-align: center">
                      <thead>
                      <tr>
                          <th scope="col" width="10%">Customer name</th>
                          <th scope="col" width="15%">Phone</th>
                          <th scope="col" width="10%">Address</th>
                          <th scope="col" width="10%">Product title</th>
                          <th scope="col" width="5%">Total Price</th>
                          <th scope="col" width="10%">Quantity</th>
                          <th scope="col" width="10%">More Details</th>
                          <th scope="col" width="10%">Status</th>
                          <th scope="col" width="10%">Action</th>

                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($order as $orders)
                        @foreach ($data as $productInfo)
                          @foreach ($userInfo as $useresInfo)



                              <tr>
                                @if($orders->product_id == $productInfo->id)
                                @if($orders->user_id == $useresInfo->id)
                                <td scope="row" >{{$useresInfo->name}}</td>
                                <td  >{{$useresInfo->phone}}</td>
                                <td >{{$useresInfo->address}}</td>
                                <td  >{{$productInfo->title}}</td>
                                <td  >{{$orders->total_price}}</td>
                                <td  >{{$orders->quantity}}</td>
                                <td  >{{$orders->more_details}}</td>
                                <td  >{{$orders->status}}</td>
                                <td>
                                  <a class="btn btn-success" href="{{url('empconfirmorder',$orders->id)}}">
                                      Deliver
                                  </a>
                                  <a class="btn btn-danger" href="{{url('emprejectorder',$orders->id)}}">
                                    Reject
                                  </a>
                                </td>
                                @endif
                              @endif
                            </tr>
                          @endforeach
                        @endforeach
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
