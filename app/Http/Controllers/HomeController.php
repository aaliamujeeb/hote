<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Offer;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Contact;
use App\Models\Marquee;

class HomeController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->get();
        $offers = Offer::latest()->get();
        $categories = Category::all();
        $marquees = Marquee::where('is_active', 1)->get();

        return view('home', compact('reviews', 'offers', 'categories', 'marquees'));
    }


    public function categoryMenu($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::all();

        // Vegetarian category
        if ($category->id == 8) {
            $items = Menu::where('is_veg', 1)->get();
        } else {
            $items = Menu::where('category_id', $id)->get();
        }

        return view('menu', compact('items', 'categories'));
    }
}