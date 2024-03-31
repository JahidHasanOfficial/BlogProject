<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>A World</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      @include('frontend.components.style')
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
       @include('frontend.components.header')
        <!-- banner section start -->
      @include('frontend.components.banner')
        <!-- banner section end -->
     </div>
      <!-- header section end -->
      <!-- services section start -->
     @include('frontend.components.services')
      <!-- services section end -->
      <!-- about section start -->
    @include('frontend.components.about')
      <!-- about section end -->
      <!-- blog section start -->
    
      <!-- choose section end -->
      <!-- footer section start -->
      @include('frontend.components.footer')
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      @include('frontend.components.script')
   </body>
</html>