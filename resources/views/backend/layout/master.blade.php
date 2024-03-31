<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Admin</title>
    <!-- plugins:css -->
   @include('backend.component.style')
  </head>
  <body>
      <!-- partial:partials/_navbar.html -->
    @include('backend.component.header')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('backend.component.sidebar')
        <!-- partial -->
        <div class="main-panel bg-slate-400">
          @yield('content')
         
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
        
          <!-- partial -->
        </div>
      
        <!-- main-panel ends -->
      </div>
      @include('backend.component.footer')
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('backend.component.script')
    <!-- End custom js for this page -->
  </body>
</html>