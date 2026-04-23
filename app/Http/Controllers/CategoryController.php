<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // SHOW LIST PAGE (ADMIN CATEGORY PAGE)
    public function index(Request $request)
    {
        $query = Category::query();

        // 🔍 SEARCH by category name
        if ($request->search) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // 📄 PAGINATION
       $categories = $query->latest()->paginate(10);

        return view('admin.categories.index', compact('categories'));
    }

    // SHOW CREATE PAGE (FORM + LIST IN SAME PAGE)
    public function create()
    {
        return view('admin.categories.create');
    }

    // STORE CATEGORY
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image'
        ]);

        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('img'), $filename);

        Category::create([
            'name' => $request->name,
            'image' => $filename
        ]);

        return redirect('/admin/categories');
    }

    // DELETE CATEGORY
    public function delete($id)
    {
        $category = Category::find($id);

        if ($category) {

            $path = public_path('img/' . $category->image);

            if (file_exists($path)) {
                unlink($path);
            }

            $category->delete();
        }

        return back();
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image'
        ]);

        $category = Category::findOrFail($id);

        $category->name = $request->name;

        // if new image uploaded
        if ($request->hasFile('image')) {

            // delete old image
            $oldPath = public_path('img/' . $category->image);
            if (file_exists($oldPath)) {
                unlink($oldPath);
            }

            // upload new image
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img'), $filename);

            $category->image = $filename;
        }

        $category->save();

        return redirect('/admin/categories');
    }
}