@extends('admin.layout.app')

@section('content')




   <div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card boreder-0 shadow-lg my-4">
       <form action="{{ route('about.update', $data->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="card-body">
            <div class="mb-3">
                <label for="name" class="form-label h5">Name:</label>
                <input type="text" value="{{ old('name', $data->name) }}" class="@error('name')@enderror form-control" id="name" name="name" placeholder="Enter your name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
           
           
            <div class="mb-3">
                <label for="phone" class="form-label h5">Phone:</label>
                <input type="number" class="form-control" value="{{ old('phone', $data->phone) }}" id="phone" name="phone" placeholder="Enter your phone">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label h5">Email:</label>
                <input type="email" class="form-control" value="{{ old('email', $data->email) }}" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="experience" class="form-label h5">Experience:</label>
                <input type="text" class="form-control" id="experience" value="{{ old('experience', $data->experience) }}" name="experience" placeholder="Enter your experience">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label h5">Address:</label>
                <textarea name="address"  class="form-control bg-white" id="" cols="" rows="2" placeholder="Enter your address" >{{ old('address', $data->address) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label h5">Description:</label>
                <textarea name="description"  class="form-control bg-white" id="" cols="" rows="5" placeholder="Enter your Description" >{{ old('description', $data->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label h5">Image:</label>
                <input type="file" class="form-control" id="image" name="image" placeholder="Enter Image">
            </div>

            <div class="mb-3">
                <img src="{{ asset('aboutimage/'.$data->image) }}" width="100" alt="">
            </div>
         
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">update</button>
            </div>
        </div>
       </form>

        </div>

    </div>

   </div>






@endsection