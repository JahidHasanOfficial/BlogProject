@extends('frontend.layouts.app')

@section('content')


<div class="row">
   <div class="col-md-8 offset-md-2">
     <div class="card mt-4 p-6">
     <h1 class="text-center text-2xl">About Details</h1>
       <img src="{{ asset('aboutimage/' . $about->image) }}" class="card-img-top" alt="...">
       <h5 class="card-title"><strong>Image:</strong></h5>
       <div class="card-body"> 
         <h5 class="card-title"><strong>Name:</strong> {{ $about->name }}</h5>
         <h5 class="card-title"><strong>phone:</strong> {{ $about->phone }}</h5>
         <h5 class="card-title"><strong>Email:</strong> {{ $about->email }}</h5>
         <h5 class="card-title"><strong>Experience:</strong> {{ $about->experience }}</h5>
         <h5 class="card-title"><strong>Address:</strong> {{ $about->address }}</h5>
         <h5 class="card-title"><strong>Description:</strong> {{ $about->description }}</h5>
       
      
        
         <p class="card-text"><small class="text-muted"><b><strong class="text-success text-xl">Date & Time:</strong></b> {{ \Carbon\Carbon::parse($about->created_at)->format('d M Y H:i:s') }}</small></p>
       
       </div>
     </div>
   </div>
 </div>


 @endsection