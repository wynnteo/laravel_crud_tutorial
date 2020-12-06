<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('public/assets/img/favicon.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="{{ asset('public/assets/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet" />
  <link href="{{ asset('public/assets/css/app.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" >
      <div class="logo"><a  href="{{ route('dashboard') }}" class="simple-text logo-normal"><i class="material-icons">cast_for_education</i>
        {{ config('app.name', 'Laravel') }}
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item {{ (Request::is('dashboard/*') || Request::is('dashboard')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item {{ (Request::is('product/*') || Request::is('product')) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('product.index') }}">
              <i class="material-icons">school</i>
              <p>Product</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;"></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="/" method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        @yield('content')
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            {{-- <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul> --}}
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script> SGWebFreelancer.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('public/assets/js/core/jquery.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/core/bootstrap-material-design.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!-- Plugin for the momentJs  -->
  <script src="{{ asset('public/assets/js/plugins/moment.min.js') }}"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="{{ asset('public/assets/js/plugins/sweetalert2.js') }}"></script>
  <!-- Forms Validations Plugin -->
  <script src="{{ asset('public/assets/js/plugins/jquery.validate.min.js') }}"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="{{ asset('public/assets/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{ asset('public/assets/js/plugins/bootstrap-selectpicker.js') }}"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="{{ asset('public/assets/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="{{ asset('public/assets/js/plugins/jquery.dataTables.min.js') }}"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{{ asset('public/assets/js/plugins/bootstrap-tagsinput.js') }}"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{ asset('public/assets/js/plugins/jasny-bootstrap.min.js') }}"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="{{ asset('public/assets/js/plugins/fullcalendar.min.js') }}"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="{{ asset('public/assets/js/plugins/jquery-jvectormap.js') }}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{ asset('public/assets/js/plugins/nouislider.min.js') }}"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="{{ asset('public/assets/js/plugins/arrive.min.js') }}"></script>
  <!-- Chartist JS -->
  <script src="{{ asset('public/assets/js/plugins/chartist.min.js') }}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('public/assets/js/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('public/assets/js/material-dashboard.js?v=2.1.2') }}" type="text/javascript"></script>
  <!-- DataTable -->
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" type="text/javascript"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

  @yield('scripts')
</body>

</html>