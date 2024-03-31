@extends('admin.layout.app')

@section('content')




   <div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card boreder-0 shadow-lg my-4">
       <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="mb-3">
                <label for="title" class="form-label h5">Post Title:</label>
                <input type="text" value="{{ old('title', $post->title) }}" class="@error('title')@enderror form-control" id="title" name="title" placeholder="Enter Post Title">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
           
           
            <div class="mb-3">
                <label for="description" class="form-label h5">Post Description:</label>
                <textarea name="description"  class="form-control bg-white" id="" cols="" rows="5" placeholder="Enter Post Description" >{{ old('description', $post->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label h5">Image:</label>
                <input type="file" class="form-control" id="image" name="image" placeholder="Enter Image">
            </div>

            <div class="mb-3">
                <img src="{{ asset('postimage/'.$post->image) }}" width="100" alt="">
            </div>
         
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">update</button>
            </div>
        </div>
       </form>

        </div>

    </div>

   </div>






<h1>ad post</h1>
@endsection