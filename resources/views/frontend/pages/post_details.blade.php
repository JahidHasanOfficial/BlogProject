@extends('frontend.layouts.app')

@section('content')


<div class="row">
  <div class="col-md-8 offset-md-2">
    <div class="card mt-4">
      <img src="{{ asset('postimage/' . $post->image) }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ $post->description }}</p>
        <p class="card-text"><small class="text-muted"><b><strong class="text-success text-xl">Date & Time:</strong></b> {{ \Carbon\Carbon::parse($post->created_at)->format('d M Y H:i:s') }}</small></p>
        <p><b><strong class="text-success text-xl">Admin by</strong></b> {{ $post->name }}</p>
      </div>
    </div>
  </div>
</div>




@endsection




