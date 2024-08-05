@extends('home')

@section('content')

<div class="grid1440">
    <div class="ext-margin">
        <div class="blogs-card">
            <!-- <div class="blog-card-image">
            <img src="/images" alt="Blogs card image" class="blogs-card-image"> 
            </div> -->
            <div class="blog-content">
                <h1 class="blog-heading">
                    {{$blogs->name}}
                </h1>
                <article class="blog-description">
                    {{$blogs->description}}
                </article>
            </div>
        </div>

        <div class="form-button-container">

            <form action="/blogs/{{$blogs->id}}/edit" method="GET" class="show-blog-form edit-button-form-container">
                <div class="form-field-container">
                    <input type="submit" value="Edit Post" class="btn-submit edit-post" name="edit-post">
                </div>
            </form>

            <form action="/blogs/{{$blogs->id}}" method="POST" class="show-blog-form delete-button-form-container">
                @csrf
                @method("DELETE")
                <div class="form-field-container">
                    <input type="submit" value="Delete Post" class="btn-submit delete-post" name="delete-post">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection