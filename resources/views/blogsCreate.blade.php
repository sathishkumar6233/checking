@extends('/home')


@section( 'content' )


<style>
    /* General grid styling */
.grid1440 {
    display: grid;
    display: flex;
    justify-content: center;
    align-items: center;
    /* grid-template-columns: 1fr; */
    /* gap: 5px; */
    /* max-width: 1440px; */
    /* margin: 0 auto; */
    /* padding: 20px; */
    box-sizing: border-box;
}

/* Container for the blog form and blogs list */
.blogs-container {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Headings */
.blogs-container h1 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

/* Form labels */
.blogs-container label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #555;
}

/* Form inputs */
.blogs-container input[type="text"],
.blogs-container input[type="description"],
.blogs-container input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
}

/* Submit button */
.blogs-container input[type="submit"] {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.blogs-container input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Responsive design */
@media (min-width: 768px) {
    .grid1440 {
        grid-template-columns: 1fr 1fr;
    }
}

@media (min-width: 1024px) {
    .grid1440 {
        grid-template-columns: 1fr 1fr 1fr;
    }
}

</style>

<div class="grid1440">

    <div class="blogs-container gap-5">
        <h1>Create a new blog</h1>
        <h1>Blogs</h1>

        <form action="{{ url('/blogs') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <label for="/blogs-title">Blogs Title</label>
            <input type="text" name="title" id="blogs-title" placeholder="Enter the blog title here"> <br>
            
            <label for="/blogs-description">Blogs Description</label>
            <input type="description" name="description" id="blogs-description"  placeholder="Enter the blog description here"> <br>
            
            <label for="/blogs-choose-image">Choose blogs image</label>
            <input type="file" name="image" id="blogs-choose-image"> <br>
            
            <input type="submit" value="publish blogs"  name="submit" class="btn btn-primary">

            @if(count($errors)>0)
            <div class="alert alert-danger">
                <strong>Whoops! There are problem in uploading image</strong>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
            <img src="images/{{Session::get('image_name')}}"  width="300" height="200">
            @endif
        </form>
    </div>
</div>
@endsection