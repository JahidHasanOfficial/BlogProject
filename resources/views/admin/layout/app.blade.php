<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
   @include('admin.component.style')
  </head>
  <body>
   @include('admin.component.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.component.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        @yield('content')
     @include('admin.component.footer')
      </div>
    </div>
    <!-- JavaScript files-->
  @include('admin.component.script')
  </body>
</html>