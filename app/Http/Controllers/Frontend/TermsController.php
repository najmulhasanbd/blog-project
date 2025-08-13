<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Terms;

class TermsController extends Controller
{
    public function index()
    {
        $terms = Terms::firstOrFail();
        return view('frontend.terms.index', compact('terms'));
    }
}
