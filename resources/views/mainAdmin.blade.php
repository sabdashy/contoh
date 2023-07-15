  <!DOCTYPE html>
  <html lang="en">

  @include('partials.admin._head')

  <body class="hold-transition sidebar-mini layout-fixed">
    

      <!-- Preloader
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> -->

      <!-- Navbar -->
        @include('partials.admin._navbar')
      <!-- /.navbar -->

    {{-- Sidebar --}}
        @include('partials.admin._sidebar')
    {{-- /Sidebar --}}


      <!-- Content Wrapper. Contains page content -->
      {{-- <div class="content-wrapper"> --}}
        @yield('contentAdmin')
      {{-- </div> --}}
      <!-- /.content-wrapper -->
      @include('partials.admin._footer')

      
    <!-- ./wrapper -->

    @include('partials.admin._scripts')

  </body>

  </html>