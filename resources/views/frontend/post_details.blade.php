

@extends('frontend.homepage')

@section('content')


<div class="blog_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="blog_taital">{{ $posts->title }}</h1>
              
            </div>

        </div>
    </div>
</div>

@endsection
