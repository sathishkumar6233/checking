@extends('home')

@section('content')

<div class="grid1440 container-fluid justify-content-center">
    <div class="blogs-container">
        <h1>Blog</h1>

        <div class="blogs-card-container d-flex gap-3">
            @foreach ($blogs as $blogData)
            <a href="/blogs/{{$blogData->id}}" style="text-decoration: none;">
                <div class="blogs-card">
                    <div class="blogs-image">
                        <img src="{{ asset('images/' . $blogData->image) }}" alt="Blogs card image" class="Blogs-card-image">
                        <!-- <img src="/assets/image-Copy/🔷SELECCIÓN DE ARGENTINA ➽ SELECCIÓN DE FRANCIA 📅18_12_2022 🏆Mundial de Catar 2022 Final.png" alt="Blogs card image" class="blogs-card-image"> -->
                        <!-- <img src="/images/{{$blogData->image}}" alt="Blogs card image" class="blogs-card-image"> -->

                        </div>
                    <div class="blogs-content">
                        <h1 class="blogs-title">{{$blogData->title}}</h1>
                        <p class="blogs-desc">{{$blogData->description}}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>

        <a class="btn btn-primary" href="/blogsCreate">Create new blog post</a>
    </div>
</div>

@endsection
