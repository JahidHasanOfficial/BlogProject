@extends('admin.layout.app')

@section('content')




   <div class="container">
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-md-8 d-flex justify-content-end">
            <a href="{{ route('home') }}" class="btn btn-dark">Back to Home Page</a>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card boreder-0 shadow-lg my-4">
                <div class="card-header bg-dark">
                    <h3 class="text-white"> About Us Details Page</h3>
                </div>
       
        <div class="card-body">
            <div class="mb-3">
                <h4><b><strong class="text-success text-xl">Post Title:</strong></b> {{ $data->name }}</h4>
            </div>

            <div class="mb-3">
                <h4><b><strong class="text-success text-xl">Phone Number:</strong></b> {{ $data->phone }}</h4>  
            </div>

            <div class="mb-3">
                <h4><b><strong class="text-success text-xl">Email:</strong></b> {{ $data->email}}</h4>
            </div>

            <div class="mb-3">
                <h4><b><strong class="text-success text-xl">User Type:</strong></b> {{ $data->experience}}</h4>
            </div>

            <div class="mb-3">
                <h4><b><strong class="text-success text-xl">Post Statuse:</strong></b> {{ $data->address}}</h4>
            </div>
           
            <div class="mb-3">
                <h4><b><strong class="text-success text-xl">Image:</strong></b></h4>
                <div class="text-center">
                    <img class="p-8 w-full" src="{{ asset('/aboutimage/'.$data->image) }}" width="500" height="300" alt="">
                </div>
            </div>

            {{-- <div class="mb-3">
                <h4><b><strong class="text-success text-xl">Description:</strong></b> {{ $post->description}}</h4>
            </div>

            <div class="mb-3">
                <h4><b><strong class="text-success text-xl">Date & Time:</strong></b> {{ \Carbon\Carbon::parse($post->created_at)->format('d M Y H:i:s') }}</h4>  
            </div> --}}
           
        </div>
     

        </div>

    </div>

   </div>


   @endsection