@extends('admin.layout.app')

@section('content')




   <div class="container">
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-md-8 d-flex justify-content-end">
            <a href="{{ route('show.post') }}" class="btn btn-dark">Back to Home Page</a>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card boreder-0 shadow-lg my-4">
                <div class="card-header bg-dark">
                    <h3 class="text-white"> Prodduct Details Page</h3>
                </div>
       
        <div class="card-body">
            <div class="mb-3">
                <h4><b><strong class="text-success text-xl">Post Title:</strong></b> {{ $post->title }}</h4>
            </div>

            <div class="mb-3">
                <h4><b><strong class="text-success text-xl">Post User Id:</strong></b> {{ $post->user_id }}</h4>  
            </div>

            <div class="mb-3">
                <h4><b><strong class="text-success text-xl">Post Bye Name:</strong></b> {{ $post->name}}</h4>
            </div>

            <div class="mb-3">
                <h4><b><strong class="text-success text-xl">User Type:</strong></b> {{ $post->usertype}}</h4>
            </div>

            <div class="mb-3">
                <h4><b><strong class="text-success text-xl">Post Statuse:</strong></b> {{ $post->post_status}}</h4>
            </div>
           
            <div class="mb-3">
                <h4><b><strong class="text-success text-xl">Image:</strong></b></h4>
                <div class="text-center">
                    <img class="t" src="{{ asset('/postimage/'.$post->image) }}" width="500" height="300" alt="">
                </div>
            </div>

            <div class="mb-3">
                <h4><b><strong class="text-success text-xl">Description:</strong></b> {{ $post->description}}</h4>
            </div>

            <div class="mb-3">
                <h4><b><strong class="text-success text-xl">Date & Time:</strong></b> {{ \Carbon\Carbon::parse($post->created_at)->format('d M Y H:i:s') }}</h4>  
            </div>
           
        </div>
       </form>

        </div>

    </div>

   </div>


   @endsection