@extends('/home')


@section('content')


<div class="grid1440">

<br><br><br><br><br><br><br><br><br><br><br>


    <div class="blogs-container">
        <h1>Edit the blog</h1>
        <h1>Blogs</h1>

        <form action="/blogs/{{$blogData->id}}" method="POST">
            @csrf
            @method('PATCH')
            
            <label for="/blogs-title">Blogs Title</label>
            <input type="text" name="title" id="blogs-title" placeholder="Enter the blog title here" value="{{$blogData->title}}"><br>
            
            <label for="/blogs-description">Blogs Description</label>
            <input type="text" name="description" id="blogs-description"  cols="30" rows="3" placeholder="Enter the blog description here"value="{{$blogData->description}}"> <br>
            
            <label for="/blogs-choose-image">Choose blogs image</label>
            <input type="file" name="image" id="blogs-choose-image" value="{{$blogData->imagePath}}"> <br>
            
            <input type="submit" value="Update blogs" class="btn btn-primary">
        </form>
    </div>
</div>
@endsection