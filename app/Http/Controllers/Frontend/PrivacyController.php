<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index()
    {
        $privacy = Privacy::firstOrFail();
        return view('frontend.privacy.index', compact('privacy'));
    }
}
