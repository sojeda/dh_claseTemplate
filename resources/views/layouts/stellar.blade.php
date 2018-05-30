<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('htmlHeaderTitle', 'Mi Sistema Integrador')</title>
  <!-- plugins:css -->
  @yield('cssantes')
  
  @include('layouts.partials.styles')

  @yield('css')
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    @include('layouts.partials.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../../partials/_sidebar.html -->
        @include('layouts.partials.sidebar')    
        <!-- partial -->
        <div class="content-wrapper">
          @yield('content')
        </div>
        <!-- content-wrapper ends -->

        @include('layouts.partials.footer')
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  @yield('jsantes')
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.com/libraries/popper.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('stellar/js/off-canvas.js') }}"></script>
  <script src="{{ asset('stellar/js/misc.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
  @yield('scripts')
</body>

</html>
