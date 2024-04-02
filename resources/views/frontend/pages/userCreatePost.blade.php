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

      <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card boreder-0 shadow-lg my-4">
           <form class="" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
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