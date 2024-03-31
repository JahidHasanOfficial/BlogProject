
<div class="services_section layout_padding">
    <div class="container">
        <h1 class="services_taital">Services</h1>
        <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
        <div class="services_section_2">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                
                <!-- Loop through $posts and generate Bootstrap cards -->
                @foreach ($posts as $post)
                <div class="col">
                    <div class="card shadow">
                        <img src="{{ asset('postimage/' . $post->image) }}" class="card-img-top" alt="Post Image">
                        <div class="card-body">
                            <h1 class="card-title fw-bold">{{ $post->title }}</h1>
                            <p class="card-text text-muted">{{ $post->description }}</p>
                            <p class="card-text text-muted">Post by {{ $post->name }}</p>
                            <a href="{{ url('post_details/' . $post->id) }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>


