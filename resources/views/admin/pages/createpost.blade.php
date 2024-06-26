@extends('admin.layout.app')

@section('content')




   <div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card boreder-0 shadow-lg my-4">
       <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="mb-3">
                <label for="title" class="form-label h5">Post Title:</label>
                <input type="text" value="{{ old('title') }}" class="@error('title')@enderror form-control" id="title" name="title" placeholder="Enter Post Title">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
           
           
            <div class="mb-3">
                <label for="description" class="form-label h5">Post Description:</label>
                <textarea name="description"  class="form-control bg-white" id="" cols="" rows="5" placeholder="Enter Post Description" >{{ old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label h5">Image:</label>
                <input type="file" class="form-control" id="image" name="image" placeholder="Enter Image">
            </div>
         
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
       </form>

        </div>

    </div>

   </div>






@endsection