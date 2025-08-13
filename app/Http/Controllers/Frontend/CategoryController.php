<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index($slug)
    {
        $categories = Category::where('slug', $slug)->first();

        $blogs = Post::where('category_id', $categories->id)->get();

        return view('frontend.category.index', compact('categories', 'blogs'));
    }
}
