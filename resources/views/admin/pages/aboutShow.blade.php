@extends('admin.layout.app')

@section('content')




    <div class="row d-flex justify-content-center">
        @if (session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif
        <div class="col-md-12 p-4">
            <div class="card boreder-0 shadow-lg my-4">
                <div class="card-header bg-dark">
                    <h3 class="text-white"> Post List</h3>
                </div>

                <div>
                    <table class="table">
                        <thead>
                          <tr class="">
                            <th scope="col">SL</th>
                            <th scope="col">name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Experience</th>
                            <th scope="col" class="text-center">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($datas as $data )
                          <tr>
                            <th scope="row">{{ $loop->index+1 }}</th>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->experience }}</td>
                            {{-- <td>
                              <img src="{{ asset('aboutimage/' . $data->image) }}" width="50px" height="50px" alt="" style="border-radius: 50%;">
                          </td> --}}
                          
                            {{-- <td>{{ \Carbon\Carbon::parse($post->created_at)->format('d M Y H:i:s') }}</td> --}}
                           
                            <td class="text-center">
                                <a href="{{ route('about.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('about.view', $data->id) }}" class="btn btn-success">View</a>
                               
                               
                                {{-- <a href="#" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this post?')) { document.getElementById('delete-product-form-{{ $post->id }}').submit(); }" class="btn btn-danger">Delete</a>

                                <form id="delete-product-form-{{ $post->id }}" action="{{ route('post.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                </form> --}}
                                
                            </td>
                            
                          </tr>
                              
                          @endforeach
                        </tbody>
                      </table>
                </div>
       

        </div>

    </div>

   </div>


@endsection




<script>
    function deleteProduct(id){
     if (confirm('Are you sure?')){
      document.getElementById('delete-product-form-'+id).submit();
     }
    }
  </script>