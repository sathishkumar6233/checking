<?php

namespace App\Http\Controllers;

use App\Models\blogs;

use Illuminate\Http\Request;

class Pagescontroller extends Controller
{
    public function home()
    {
        return view('.home'); // Ensure this view exists
    }

    public function index()
    {
        $blogs = Blogs::all(); // Ensure this is the correct model and data fetching logic
        return view('profile.blogs', ['blogs' => $blogs]);
        // return view('blogs', compact('blogs'));
    }

    public function blogsCreate()
    {
        return view('blogsCreate');
    }
    public function blogs()
    {
        return view('blogs');
    }
    public function blogupload(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $blog = new Blogs;
        $blog->title = $request->title;
        $blog->image = $request->image;
        $blog->description = $request->description;

       // save blog data to the database
       \App\Models\blogs::create([
        'title' => $request->title,
        'image' => $imageName,
        'description' => $request->description
       ]);

        return redirect('/blogs')->withSuccess('Blog post created successfully.');
     }


     
    public function blogCreate()
    {
        $blog= new \App\Models\blogs;
        $blog->title=request('title');
        $blog->image=request('image');
        $blog->description=request('description');
        $blog->save();
        return redirect('/blogs');
        // return view('blogs');
    }
    public function show(\App\Models\blogs $blogs)
    {
        return view('show', compact('blogs'));
        // return view('show', compact('blogData'));
    }
    public function edit(\App\Models\blogs $blogs)
    {
        return view('edit', compact('blogs'));
    }

    // public function update(Request $request, Blogs $blogs)
    // {
    //     $blogs->update($request->only('title', 'description'));

    //     if ($request->hasFile('image')) {
    //         $request->validate([
    //             'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    //         ]);
    //         $image = $request->file('image');
    //         $filename = time() . '.' . $image->getClientOriginalExtension();
    //         $image->move(public_path('images'), $filename);
    //         $blogs->image = $filename;
    //     }

    //     return redirect('/blogs')->with('success', 'Blog post updated successfully.');
    // }
    // public function update(\App\Models\blogs $blogs)
    // {
    //     $blogs->update(request(["title","image","description"]));

    //     return redirect('/blogs');
    // }

    public function update(Request $request, \App\Models\blogs $blogs)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048' // Validation for optional image
        ]);
    
        // Update the blog post fields
        $blogs->title = $request->input('title');
        $blogs->image = $request->input('image');
        $blogs->description = $request->input('description');
    
        // Handle the image upload if a new image is provided
        if ($request->hasFile('image')) {
            // Generate a unique name for the image
            $imageName = time() . '.' . $request->file('image')->extension();
    
            // Move the uploaded file to the public images directory
            $request->file('image')->move(public_path('images'), $imageName);
    
            // Update the blog's imagePath with the new image name~
            $blogs->image = $imageName;
        }
    
        // Save the updated model instance to the database
        $blogs->save();
    
        // Redirect or return success response
        return redirect('/blogs')->with('success', 'Blog updated successfully!');
    }

    public function delete(\App\Models\blogs $blogs)
    {
        $blogs->delete();
        return redirect('/blogs')->with('success', 'Blog post deleted successfully.');
    }


    public function About(){
        return view('About');
    }
    public function contact(){
        return view('contact');
    }
    public function Service(){
        return view('service');
    }
    // public function Blogs(){
    //     return view('Blogs');
    // }




}
