<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $images = Gallery::latest()->get();

        return view('gallery', compact('images'));
    }
    public function create()
    {
        return view('admin.gallery.create');
    }
}
