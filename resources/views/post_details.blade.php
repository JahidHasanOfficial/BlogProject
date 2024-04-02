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
      <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('css') }}css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('css') }}/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{ asset('css') }}/owl.carousel.min.css">
      <link rel="stylesheet" href="{{ asset('css') }}/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <<div class="header_main">
            <div class="mobile_menu">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <div class="logo_mobile"><a href="index.html"><img src="{{ asset('images') }}/logo.png"></a></div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="blog.html">Blog</a>
                        </li>
                        @if (Route::has('login'))
                        @auth
              
           
                        <x-app-layout>
           
                        </x-app-layout>
        
                        @else
        
                        <li class="nav-item">
                           <a class="nav-link " href="{{ route('login') }}">login</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link " href="{{ route('register') }}">Register</a>
                        </li>
        
                        @endauth
                        @endif
        
                     </ul>
                  </div>
               </nav>
            </div>
            <div class="container-fluid">
               <div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('images') }}/logo.png"></a></div>
               <div class="menu_main">
                  <ul>
                     <li class="active"><a href="{{ url('/') }}">Home</a></li>
                     <li><a href="about.html">About</a></li>
                     <li><a href="blog.html">Blog</a></li>
        
                     @if (Route::has('login'))
                     @auth
           
        
                     <x-app-layout>
        
                     </x-app-layout>
                    
                        
                    @else
        
                     <li><a href="{{ route('login') }}">Login</a></li>
        
                     <li><a href="{{ route('register') }}">Register</a></li>
                     @endauth
                     @endif
                  </ul>
               </div>
            </div>
         </div>
         <!-- banner section start -->
         {{-- <div class="banner_section layout_padding">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <h1 class="banner_taital">Adventure</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have sufferedThere are ma available, but the majority have suffered</p>
                        <div class="read_bt"><a href="#">Get A Quote</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Adventure</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have sufferedThere are ma available, but the majority have suffered</p>
                        <div class="read_bt"><a href="#">Get A Quote</a></div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <h1 class="banner_taital">Adventure</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but the majority have sufferedThere are ma available, but the majority have suffered</p>
                        <div class="read_bt"><a href="#">Get A Quote</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div> --}}
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- services section start -->
      

<div class="mt-5" style="margin-top: 100px;">
    <h1>
        {{ $post->title }}
    </h1>
</div>
<img src="{{ asset('postimage/' . $post->image) }}" alt="">

      <!-- choose section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="input_btn_main">
               <input type="text" class="mail_text" placeholder="Enter your email" name="Enter your email">
               <div class="subscribe_bt"><a href="#">Subscribe</a></div>
            </div>
            <div class="location_main">
               <div class="call_text"><img src="{{ asset('images') }}/call-icon.png"></div>
               <div class="call_text"><a href="#">Call +01 1234567890</a></div>
               <div class="call_text"><img src="{{ asset('images') }}/mail-icon.png"></div>
               <div class="call_text"><a href="#">demo@gmail.com</a></div>
            </div>
            <div class="social_icon">
               <ul>
                  <li><a href="#"><img src="{{ asset('images') }}/fb-icon.png"></a></li>
                  <li><a href="#"><img src="{{ asset('images') }}/twitter-icon.png"></a></li>
                  <li><a href="#"><img src="{{ asset('images') }}/linkedin-icon.png"></a></li>
                  <li><a href="#"><img src="{{ asset('images') }}/instagram-icon.png"></a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{ asset('js') }}/jquery.min.js"></script>
      <script src="{{ asset('js') }}/popper.min.js"></script>
      <script src="{{ asset('js') }}/bootstrap.bundle.min.js"></script>
      <script src="{{ asset('js') }}/jquery-3.0.0.min.js"></script>
      <script src="{{ asset('js') }}/plugin.js"></script>
      <!-- sidebar -->
      <script src="{{ asset('js') }}/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="{{ asset('js') }}/custom.js"></script>
      <!-- javascript --> 
      <script src="{{ asset('js') }}/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>

