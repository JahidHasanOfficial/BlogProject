@extends('frontend.layouts.app')

@section('content')

<div class="services_section layout_padding" id="blog">
    <div class="container">
       <h1 class="services_taital">Blog Posts</h1>
       <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
       <div class="services_section_2">
          <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-6 col-lg-3 col-sm-12">
                <div class="card mt-3">
                  <img src="{{ asset('postimage/' . $post->image) }}" alt="Placeholder" height="80" class="">
                  <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p class="card-text">Admin by {{ $post->name }}</p>
                    <a href="{{ url('post_details', $post->id) }}" class="btn btn-primary btn-block">Read More</a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
       </div>
    </div>
 </div>


 <div class="about_section layout_padding" id="about">
  <div class="container-fluid">
      <div class="row">
          @foreach($abouts as $about)
          <div class="col-md-6">
              <div class="about_taital_main">
                  <h1 class="about_taital">About Us</h1>
                  <p class="about_text">{{ $about->description }}</p>
                  <div class="readmore_bt"><a href="{{ url('about_details', $about->id) }}">Read More</a></div>
              </div>
          </div>
          <div class="col-md-6 padding_right_0">
              <div><img src="{{ asset('aboutimage/' . $about->image) }}" class="about_img"></div>
          </div>
          @endforeach
      </div>
  </div>
</div>

@endsection
