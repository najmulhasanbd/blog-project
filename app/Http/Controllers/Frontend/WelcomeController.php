<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index(){
        $blogs=Post::latest()->get();
        return view('frontend.welcome',compact('blogs'));
    }
}
