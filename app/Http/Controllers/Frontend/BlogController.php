<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Post::latest()->get();
        return view('frontend.blogs.index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Post::where('slug', $slug)->firstOrFail();
        $relatedPost=Post::where('category_id',$blog->category_id)->where('id','!=',$blog->id)->get();

        return view('frontend.blogs.show', compact('blog','relatedPost'));
    }
}
