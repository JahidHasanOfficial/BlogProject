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

      
<div class="services_section layout_padding">
    <div class="container">
       <h1 class="services_taital">My Blogs Post</h1>
       
       <div class="services_section_2">
          <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="card mt-3">
                  <img src="{{ asset('postimage/' . $post->image) }}" alt="Placeholder" height="80" class="">
                  <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p class="card-text">Admin by {{ $post->name }}</p>

                    
                    <a href="{{ route('post.user.edit', $post->id) }}" class="btn btn-primary">Edit</a>

                    
                    <a href="{{ url('post_details', $post->id) }}" class="btn btn-success">View</a>
                    <a onclick="return confirm('Are you sure?')" type="button" href="{{ route('mypost.destroy', $post->id) }}" class="btn btn-success">Delete</a>
                    {{-- <a href="{{ url('post_details', $post->id) }}" class="btn btn-primary btn-block">Read More</a> --}}
                  </div>
                </div>
              </div>
            @endforeach
          </div>
       </div>
    </div>
 </div>
       
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