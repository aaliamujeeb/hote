<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;

class MenuController extends Controller
{
    public function index()
    {
        $items = Menu::latest()->get();
        $categories = Category::all();

        return view('menu', compact('items', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('menus.create', compact('categories'));
    }


    public function menuByCategory($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::all();

        // ✅ Vegetarian category (ID = 8)
        if ($category->id == 8) {
            $items = Menu::where('is_veg', 1)->get();
        } else {
            $items = Menu::where('category_id', $id)->get();
        }

        return view('menu', compact('items', 'categories'));
    }
}