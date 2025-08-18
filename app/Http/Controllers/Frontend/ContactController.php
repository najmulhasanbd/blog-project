<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact.index');
    }

   public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subjects' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Store in database
        Contact::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'subjects' => $request->subjects,
            'message' => $request->message,
        ]);

        // Flash message
        return redirect()->back()->with('success', 'Thank you for contacting us. We will contact you soon!');
    }
}
