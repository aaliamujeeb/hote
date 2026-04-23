<?php

namespace App\Http\Controllers; // ✅ MUST ADD THIS

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Review;

class ContactController extends Controller
{
    
    public function index()
    {
        return view('contact');
    }
    // STORE DATA
    public function store(Request $request)
    {
        // VALIDATION
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // SAVE TO DB
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);

        // RETURN BACK WITH SUCCESS
        return back()->with('success', 'Message sent successfully!');
    }
    public function storeReview(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'review' => 'required',
            'rating' => 'required'
        ]);

        Review::create([
            'name' => $request->name,
            'review' => $request->review,
            'rating' => $request->rating
        ]);

        return back()->with('success_review', 'Review submitted!');
    }
}