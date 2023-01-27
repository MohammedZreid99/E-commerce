        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="/">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <a class="navbar-brand brand-logo-mini" href="/"><span class="menu-title">DASHBOARD</span></a>
            </a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <ul class="navbar-nav w-50">
              <li class="nav-item w-50">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search" action="{{url('empsearchproduct')}}" method="post">
                @csrf
                  <input type="search" name="search"class="form-control" placeholder="Search">
                  <input style="background-color: #d00606" type="submit" value="search" class="btn btn-success">
                </form>
              </li>
            </ul>

<li>
<x-app-layout>


</x-app-layout>
</li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
