<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage as FacadesStorage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::where("user_id", request()->user()->id)
        ->orderBy("id", "DESC")
        ->paginate(10);

        return view("blog.index", ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //implementing validation rule or validating the input to be stored
       $data = $request->validate([
            "title" => "required|string",
            "description" => "required|string",
            "banner_image" => "required|image"
        ]);

        //testing demo data before sending to db
        // echo "<pre>";
        // print_r($request->all());

        $data["user_id"] = request()->user()->id;
        //upload image in a folder call blogs
        if($request->hasFile("banner_image")){
            $data["banner_image"] = $request->file("banner_image")->store("blogs", "public");
        }

        Blog::create($data);

        return to_route("blog.index")->with("success", "Blog Post Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view("blog.show", [
            "blog" => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view("blog.edit", [
            "blog" => $blog
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $data = $request->validate([
            "title" => "required|string",
            "description" => "required|string",
        ]);

        if($request->hasFile("banner_image")){
            if($blog->banner_image){
                Storage::disk("public")->delete($blog->banner_image);
            }
            $data["banner_image"] = $request->file("banner_image")->store("blogs", "public");
        }

        $blog->update($data);
        return to_route("blog.show", $blog)->with("success", "Blog Post updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //delete image from path or storage
        if($blog->banner_image){
            Storage::disk("public")->delete($blog->banner_image);
        }

        $blog->delete();
        return to_route("blog.index")->with("success", "Blog Post Deleted Successfully");
    }
}
