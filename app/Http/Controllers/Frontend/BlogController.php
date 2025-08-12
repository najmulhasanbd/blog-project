<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs=Post::latest()->get();
        return view('frontend.blogs.index',compact('blogs'));
    }
}
