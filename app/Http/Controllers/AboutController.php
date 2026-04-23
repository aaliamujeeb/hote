<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class AboutController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->get();
        return view('about', compact('reviews'));
    }
}
