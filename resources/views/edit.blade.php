@extends('/home')


@section('content')


<div class="grid1440">
    <div class="ext-margin">
        <h1>Edit Blog</h1>
        
        <form method="POST" action="/blogs/{{$blogs->id}}" enctype="multipart/form-data" class="create-blog-form">
            @csrf
            @method("PATCH")
            <div class="form-field-container blog-name-container">
                <label for="blog-name" class="input-field-label">Blog Name</label> <br>
                <input type="text" name="title" id="blog-title" placeholder="Enter the Blog name" value="{{$blogs->title}}">
            </div>

            <div class="form-field-container blog-desc-container">
                <label for="blog-desc" class="input-field-label">Blog Description</label> <br>
                <textarea type="text" name="description" id="blog-desc" placeholder="Enter the Blog description">{{$blogs->description}}</textarea>
            </div>

            <div class="form-field-container blog-desc-container">
                <label for="blog-image" class="input-field-label">Choose Blog Image</label> <br>
                <input type="file" name="image" id="blog-image">
            </div>

            <div class="form-field-container">
                <input type="submit" value="Submit" class="btn-submit" name="submit">
            </div>
        </form>
    </div>
</div>
@endsection