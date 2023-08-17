<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials.header')
</head>
<body class="hold-transition login-page">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
          <img class="animation__wobble" src="{{asset('/assets/admin')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>
      
        <!-- Navbar -->
        @include('partials.sidebar')
        <!-- /.navbar -->
      
        <!-- Main Sidebar Container -->
      
        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->
      
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      
        <!-- Main Footer -->
        @include('partials.footer')
      </div>
      @include('partials.scripts')
<!-- /.login-box -->
</body>
</html>
