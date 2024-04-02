

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
      
      
<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="card mt-4">
      <img src="{{ asset('postimage/' . $post->image) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ $post->description }}</p>
        <p class="card-text"><small class="text-muted"><b><strong class="text-success text-xl">Date & Time:</strong></b> {{ \Carbon\Carbon::parse($post->created_at)->format('d M Y H:i:s') }}</small></p>
        <p><b><strong class="text-success text-xl">Posted by</strong></b> {{ $post->name }}</p>
      </div>
    </div>
  </div>
</div>
    
      <!-- choose section end -->
      <!-- footer section start -->
      @include('frontend.components.footer')
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by me </p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      @include('frontend.components.script')
   </body>
</html>
























