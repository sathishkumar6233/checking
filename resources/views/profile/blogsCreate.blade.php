@extends('home')

@section('content')

<div class="grid1440 container-fluid justify-content-center">
    <div class="blogs-create-container">
        <h1>Create New Blog Post</h1>

        <form action="/blogs" method="POST" enctype="multipart/form-data">
            
            @csrf

            <div class="form-group">
                <label for="title" style="text-decoration: none;">Title:</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description" style="text-decoration: none;">Description:</label>
                <textarea id="description" name="description" class="form-control" required></textarea>
            </div>

            <!-- <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" class="form-control" required>
            </div> -->

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection
