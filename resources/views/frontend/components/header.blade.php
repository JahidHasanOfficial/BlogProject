<div class="header_main ">
    <div class="mobile_menu">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo_mobile"><a href="index.html"><img src="{{ asset('frontend') }}/assets/images/logo.png"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav ">
                <li class="nav-item">
                   <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link " href="blog.html">Blog</a>
                </li>
                
                @if (Route::has('login'))
               @auth
   

             <x-app-layout>

             </x-app-layout>
            

            <li class="nav-item">
               <a class="nav-link" href="{{ route('my.post') }}">My Post</a> 
            </li>
            <li class="nav-item">
               <a class="nav-link " href="{{ route('user.create.post') }}">Create Post</a>
            </li>
                
            @else

             

            <li class="nav-item">
               <a class="nav-link" href="{{ route('login') }}">Login</a>
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
    <div class="container-fluid ">
       <div class="logo fixed-top mt-7"><a href="index.html"><img class="text-info" src="{{ asset('frontend') }}/assets/images/logo.png"></a></div>
       <div class="menu_main fixed-top mt-10">
          <ul class="">
             <li class="active"><a class="text-info" href="{{ url('/') }}">Home</a></li>
             <li><a class="text-info" href="#about">About</a></li>
             <li><a class="text-info" href="#blog">Blog</a></li>

             @if (Route::has('login'))
             @auth
   

             <x-app-layout>

             </x-app-layout>
             <li><a class="text-info" href="{{ route('my.post') }}">My Post</a></li>
             <li><a class="text-info" href="{{ route('user.create.post') }}">Create Post</a></li>
                
            @else

             <li><a class="text-info" href="{{ route('login') }}">Login</a></li>

             <li><a class="text-info" href="{{ route('register') }}">Register</a></li>
             


             @endauth
             @endif
          </ul>
       </div>
    </div>
 </div>