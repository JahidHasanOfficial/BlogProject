{{-- @extends('frontend.layouts.app') --}}




<div class="about_section layout_padding">
   <div class="container-fluid">
       <div class="row">
           @foreach($abouts as $about)
           <div class="col-md-6">
               <div class="about_taital_main">
                   <h1 class="about_taital">About Us</h1>
                   <p class="about_text">{{ $about->name }}</p>
                   <div class="readmore_bt"><a href="#">Read More</a></div>
               </div>
           </div>
           <div class="col-md-6 padding_right_0">
               <div><img src="{{ asset('frontend') }}/assets/images/about-img.png" class="about_img"></div>
           </div>
           @endforeach
       </div>
   </div>
</div>




