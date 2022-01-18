<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{secure_secure_asset('admin_secure_assets/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{secure_secure_asset('admin_secure_assets/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{secure_secure_asset('admin_secure_assets/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{secure_secure_asset('admin_secure_assets/images/t1.svg')}}" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href="{{route('admin.dashboard')}}"><img src="{{secure_secure_asset('admin_secure_assets/images/t2.svg')}}" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="{{route('admin.dashboard')}}"><img src="{{secure_secure_asset('admin_secure_assets/images/t1.svg')}}" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{secure_secure_asset('admin_secure_assets/images/faces/face5.jpg')}}" alt="profile"/>
              <span class="nav-profile-name">{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="typcn typcn-cog-outline text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">

              <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-jet-dropdown-link href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                this.closest('form').submit();">
                   <i class="typcn typcn-eject text-primary"> {{ __('Log Out') }} </i>
                </x-jet-dropdown-link>
            </form> </a>
            </div>
          </li>
         <!-- <li class="nav-item nav-user-status dropdown">
              <p class="mb-0"></p>
          </li>-->
        </ul>

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-date dropdown">
            <a class="nav-link d-flex justify-content-center align-items-center" href="javascript:;">
              <h6 class="date mb-0">Date:<?php $timezone =date_default_timezone_set('Asia/Dhaka');
                print $date = date('Y-m-d h:i:s a', time());?> </h6>
              <i class="typcn typcn-calendar"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-date dropdown">
                <div class="ml-3 relative">





                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>


                </div>
            </li>




            <!-- Authentication -->

        </ul>





        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="typcn typcn-th-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
      <div class="navbar-links-wrapper d-flex align-items-stretch">
        <div class="nav-link">
          <a href="javascript:;"><i class="typcn typcn-calendar-outline"></i></a>
        </div>
        <div class="nav-link">
          <a href="javascript:;"><i class="typcn typcn-mail"></i></a>
        </div>
        <div class="nav-link">
          <a href="javascript:;"><i class="typcn typcn-folder"></i></a>
        </div>
        <div class="nav-link">
          <a href="javascript:;"><i class="typcn typcn-document-text"></i></a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item ml-0">
            <h4 class="mb-0">Dashboard</h4>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-search d-none d-md-block mr-0">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search..." aria-label="search" aria-describedby="search">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="typcn typcn-zoom"></i>
                </span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close typcn typcn-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.main.create')}}">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Main Page</span>
              <div class="badge badge-danger">new</div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" id="ui-basic" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="typcn typcn-document-text menu-icon"></i>
            <span class="menu-title">Side Bar</span>
            <i class="menu-arrow"></i>
            </a>
                <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('admin.info.create')}}">Create user</a></li>
                        <li class="nav-item"> <a class="nav-link" href="{{route('admin.info.view')}}">View User</a></li>
                    </ul>
                </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="typcn typcn-user-add-outline menu-icon"></i>
            <span class="menu-title">Education</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{route('admin.edu.create')}}">Create education</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('admin.edu.view')}}">View qulification</a></li>

            </ul>
            </div>
        </li>

    <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" id="charts" href="#charts" aria-expanded="false" aria-controls="charts">
            <i class="typcn typcn-chart-pie-outline menu-icon"></i>
            <span class="menu-title">Experience</span>
            <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.exper.create')}}">Create Experience</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.exper.view')}}">View Experience</a></li>
            </ul>
            </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" id="tables" href="#tables" aria-expanded="false" aria-controls="tables">
        <i class="typcn typcn-th-small-outline menu-icon"></i>
        <span class="menu-title">Service</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.service.create')}}">Create</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.service.view')}}">View</a></li>
        </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
        <i class="typcn typcn-globe-outline menu-icon"></i>
        <span class="menu-title">Testomoni</span>
        <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="error">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.testmoni.create')}}"> Create </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.testmoni.view')}}"> View </a></li>
        </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
        <i class="typcn typcn-compass menu-icon"></i>
        <span class="menu-title">Protfolio</span>
        <i class="menu-arrow"></i>
        </a>
            <div class="collapse" id="icons">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.protfolio.create')}}" >Create</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.protfolio.view')}}" >View</a></li>
            </ul>
            </div>
    </li>

        </ul>
      </nav>
      <!-- partial -->
      @include('alert.msg')
      @yield('content')
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="{{secure_secure_asset('admin_secure_assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{secure_secure_asset('admin_secure_assets/vendors/chart.js/Chart.min.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{secure_secure_asset('admin_secure_assets/js/off-canvas.js')}}"></script>
  <script src="{{secure_secure_asset('admin_secure_assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{secure_secure_asset('admin_secure_assets/js/template.js')}}"></script>
  <script src="{{secure_secure_asset('admin_secure_assets/js/settings.js')}}"></script>
  <script src="{{secure_secure_asset('admin_secure_assets/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{secure_secure_asset('admin_secure_assets/js/dashboard.js')}}"></script>

</body>

</html>

