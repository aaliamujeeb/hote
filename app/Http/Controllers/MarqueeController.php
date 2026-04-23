<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marquee;

class MarqueeController extends Controller
{
     public function index(Request $request)
    {
        $query = Marquee::query();

        // 🔍 search
        if ($request->search) {
            $query->where('text', 'like', '%' . $request->search . '%');
        }

        // 📄 pagination
        $marquees = $query->latest()->paginate(10);

        return view('admin.marquee.index', compact('marquees'));
    }
    public function create()
    {
        return view('admin.marquee.create');
    }

    public function store(Request $request)
    {
        Marquee::create([
            'text' => $request->text,
            'is_active' => $request->has('is_active')
        ]);

        return redirect('/admin/marquee');
    }
    // ================= DELETE =================
    public function delete($id)
    {
        $item = Marquee::find($id);

        if ($item) {
            $item->delete();
        }

        return back();
    }

    // ================= EDIT PAGE =================
    public function edit($id)
    {
        $item = Marquee::find($id);
        return view('admin.edit-marquee', compact('item'));
    }

// ================= UPDATE =================
    public function update(Request $request, $id)
    {
        $item = Marquee::find($id);

        $item->text = $request->text;
        $item->is_active = $request->has('is_active');

        $item->save();

        return redirect('/admin/marquee');
    }
        
}
