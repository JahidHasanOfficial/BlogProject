@extends('frontend.layouts.app')

@section('content')

<div class="services_section layout_padding">
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

@endsection
