{{-- 


<div class="about_section layout_padding">
    <div class="container-fluid">
       <div class="row">
          <div class="col-md-6">
             <div class="about_taital_main">
               

                <h1 class="about_taital">About Us</h1>
                @foreach ($abouts as $data) 
                <p class="about_text">{{ $data->name }}</p>
                <div class="readmore_bt"><a href="#">Read More</a></div>
                   
                @endforeach
             </div>
          </div>
          <div class="col-md-6 padding_right_0">
             <div><img src="{{ asset('frontend') }}/assets/images/about-img.png" class="about_img"></div>
          </div>
       </div>
    </div>
 </div> --}}