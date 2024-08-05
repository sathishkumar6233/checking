@extends('home')

@section('content')
<div class="grid1440 container-fluid justify-content-center">
    <div class="blogs-container">
        <h1>Blog</h1>

        <div class="blogs-card-container d-flex gap-3">
            @foreach ($blogs as $blogData)
            <a href="/blogs/{{$blogData->id}}">
                <div class="blogs-card card">
                    <!-- <div class="blogs-image"> -->
                        <!-- <img src="{{ asset('/public/assets/image/' . $blogData->image) }}" alt="Blogs card image" class="Blogs-card-image">
                          -->
                          <!-- <div class="blogs-image">
                               <img src="{{ asset('public/storage/assets/image/' . $blogData->image) }}" alt="Blogs card image" class="blogs-card-image">
                          </div> -->

                    <!-- </div> -->
                    <div class="blogs-content card-body">
                        <h1 class="blogs-title card-title">{{$blogData->title}}</h1>
                        <p class="blogs-desc card-text">{{$blogData->description}}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        <a class="btn btn-primary" href="/blogs/blogsCreate">Create new blog post</a>
    </div>
</div>
@endsection
