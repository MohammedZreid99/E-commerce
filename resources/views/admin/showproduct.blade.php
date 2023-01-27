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
.immmm{
  width: 60px !important;
  height: 60px !important;
  border-radius: 20% !important;

}
.inin{
}
table th{
        font-size: 15px !important;
    height: 60px;
    color: #2a003f !important;
      }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Show Products  </title>
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
                {{-- <div align="center" style="background-color: gray; padding: 20px">
                   <div style="display: flex; justify-content: space-between">
                    <div style="padding: 20px;">Title</div>
                    <div style="padding: 20px;">Description</div>
                    <div style="padding: 20px;">Quntity</div>
                    <div style="padding: 20px;">Price</div>
                    <div style="padding: 20px;">Image</div>
                    <div style="padding: 20px;">Update</div>
                    <div style="padding: 20px;">Delete</div>
                   </div>

                </div>
                @foreach ($data as $product )
                  @if($product->action == "Published")
                    <div align="center" style="background-color: black; padding: 30px">
                        <div style="display: flex; justify-content: space-between">
                        <div>{{$product->title}}</div>
                        <div>{{$product->description}}</div>
                        <div>{{$product->quantity}}</div>
                        <div>{{$product->price}}</div>
                        <div><img height="100" width="100" src="/productimage/{{$product->image}}"></div>
                        <div><a class="btn btn-secondary" href="{{url('updateproduct',$product->id)}}">Update</a></div>
                        <div><a class="btn btn-danger" href="{{url('deleteproduct',$product->id)}}">Delete</a></div>
                        </div>
                    </div>
                  @endif
                @endforeach --}}
                <div class="container mt-5">
                  <table class="table table-striped" style="text-align: center">
                      <thead>
                      <tr>
                           <th scope="col" width="10%">Title</th>
                          <th scope="col" width="15%">Description</th>
                          <th scope="col" width="10%">Quntity</th>
                          <th scope="col" width="10%">Price</th>
                          <th scope="col" width="5%">Image</th>
                          <th scope="col" width="10%">Update</th>
                          <th scope="col" width="10%">Delete</th>
                          <th scope="col" width="10%">Move to archive</th>
                      </tr>
                      </thead>
                      <tbody>
                          @foreach($data as $product)
                          @if($product->action == "Published")
                              <tr>
                                  <td scope="row">{{$product->title }}</td>
                                  <td>{{ $product->description }}</td>
                                  <td>{{ $product->quantity}}</td>
                                  <td>{{ $product->price }}</td>

                                  <td class="inin"><img class="immmm"   height="53px" width="100px" src="/productimage/{{$product->image}}"></td>
                                  <td><a class="btn btn-warning" href="{{url('updateproduct',$product->id)}}">Update</a></td>
                                  <td><a class="btn btn-danger" href="{{url('deleteproduct',$product->id)}}">Delete</a></td>
                                  <td><a class="btn btn-danger" href="{{url('archiveproduct',$product->id)}}">move to archive</a></td>
                              </tr>
                              @endif
                          @endforeach
                      </tbody>
                  </table>

                  {{-- <div class="d-flex">
                      {!! $data->links() !!}
                  </div> --}}
              </div>
            </div>
          </div>

        <!-- partial -->
         <!-- main-panel ends -->
       <!-- page-body-wrapper ends -->
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
