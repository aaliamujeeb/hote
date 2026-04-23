<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;   

// MODELS
use App\Models\Contact;
use App\Models\Review;
use App\Models\Menu;
use App\Models\Offer;
use App\Models\Gallery;
use App\Models\Category;
use App\Models\Marquee;

class AdminController extends Controller
{
    // ================= DASHBOARD =================
    public function dashboard()
    {
        if (!session()->has('admin')) {
            return redirect('/admin');
        }

        return view('admin.dashboard', [
            'totalContacts' => Contact::count(),
            'totalReviews' => Review::count(),
            'totalMenu' => Menu::count(),
            'totalOffers' => Offer::count(),
            'totalGallery' => Gallery::count(),
            'totalCategories' => Category::count(),
            'totalMarquees' => Marquee::count()
        ]);
    }

    // ================= CONTACTS =================
    public function contacts()
    {
        if (!session()->has('admin')) return redirect('/admin');

        $contacts = Contact::latest()->paginate(10);
        return view('admin.contacts', compact('contacts'));
    }

    // ================= REVIEWS =================
    public function reviews()
    {
        if (!session()->has('admin')) return redirect('/admin');

        $reviews = Review::latest()->paginate(10);
        return view('admin.reviews', compact('reviews'));
    }

    // ================= DELETE CONTACT =================
    public function deleteContact($id)
    {
        $contact = Contact::find($id);

        if ($contact) {
            $contact->delete();
        }

        return back();
    }

    // ================= DELETE REVIEW =================
    public function deleteReview($id)
    {
        $review = Review::find($id);

        if ($review) {
            $review->delete();
        }

        return back();
    }

    // ================= MENU PAGE =================
    public function menu(Request $request)
    {
        if (!session()->has('admin')) {
            return redirect('/admin');
        }

        $query = Menu::with('category');

        // 🔍 SEARCH by name
        if ($request->search) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        // 📂 FILTER by category
        if ($request->category_id) {
            $query->where('category_id', $request->category_id);
        }

        // 🌱 FILTER veg / non-veg
        if ($request->veg === 'veg') {
            $query->where('is_veg', 1);
        }

        if ($request->veg === 'nonveg') {
            $query->where('is_veg', 0);
        }

        $items = $query->latest()->paginate(10);

        $categories = Category::all();

        return view('admin.menu', compact('items', 'categories'));
    }

    public function createMenu()
    {
        if (!session()->has('admin')) {
            return redirect('/admin');
        }

        $categories = Category::all();

        return view('admin.create-menu', compact('categories'));
    }
    // ================= ADD MENU =================
    public function addMenu(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'image' => 'required|image'
        ]);

        // ✅ FIRST upload image
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('img'), $filename);

        // ✅ THEN save to DB
        Menu::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $filename,
            'category_id' => $request->category_id,
            'is_veg' => $request->input('is_veg', 0)
        ]);

        return redirect('/admin/menu');
    }

    // ================= DELETE MENU =================
    public function deleteMenu($id)
    {
        $item = Menu::find($id);

        if ($item) {
            $path = public_path('img/' . $item->image);
            if (file_exists($path)) {
                unlink($path);
            }
            $item->delete();
        }

        return back();
    }

    // ================= EDIT MENU =================
    public function editMenu($id)
    {
        $item = Menu::find($id);
        return view('admin.edit-menu', compact('item'));
    }

    // ================= UPDATE MENU =================
    public function updateMenu(Request $request, $id)
    {
        $item = Menu::find($id);

        if (!$item) return back();

        $item->title = $request->title;
        $item->description = $request->description;
        $item->price = $request->price;

        // ✅ ADD THIS LINE
        $item->is_veg = $request->input('is_veg', 0);

        if ($request->hasFile('image')) {

            $old = public_path('img/' . $item->image);
            if (file_exists($old)) {
                unlink($old);
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img'), $filename);

            $item->image = $filename;
        }

        $item->save();

        return redirect('/admin/menu');
    }

    // ================= LOGIN =================
    public function loginPage()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            // ✅ login success
            session(['admin' => true]);

            return redirect('/admin/dashboard');
        }

        return back()->with('error', 'Invalid login');
    }

    public function logout()
    {
        Auth::logout(); // ✅ logout from Laravel auth
        session()->forget('admin');

        return redirect('/admin');
    }

    // ================= OFFERS =================
    public function offers(Request $request)
    {
        if (!session()->has('admin')) return redirect('/admin');

        $query = Offer::query();

        if ($request->search) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $offers = $query->latest()->paginate(10);

        return view('admin.offers.index', compact('offers'));
    }
    
     public function createOffer()
    {
        if (!session()->has('admin')) return redirect('/admin');

        return view('admin.offers.create');
    }
    public function addOffer(Request $request)
    {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('img'), $filename);

        Offer::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $filename
        ]);

        return redirect('/admin/offers');
    }

    public function deleteOffer($id)
    {
        $offer = Offer::find($id);

        if ($offer) {
            $path = public_path('img/' . $offer->image);
            if (file_exists($path)) {
                unlink($path);
            }
            $offer->delete();
        }

        return back();
    }

    public function editOffer($id)
    {
        $offer = Offer::find($id);
        return view('admin.edit-offer', compact('offer'));
    }

    public function updateOffer(Request $request, $id)
    {
        $offer = Offer::find($id);

        if (!$offer) return back();

        $offer->title = $request->title;
        $offer->description = $request->description;
        $offer->price = $request->price;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img'), $filename);
            $offer->image = $filename;
        }

        $offer->save();

        return redirect('/admin/offers');
    }

    // ================= GALLERY =================
   public function gallery()
    {
        if (!session()->has('admin')) return redirect('/admin');

        $images = Gallery::latest()->paginate(10);

        return view('admin.gallery.index', compact('images'));
    }
    public function createGallery()
    {
        if (!session()->has('admin')) return redirect('/admin');

        return view('admin.gallery.create');
    }

    public function addGallery(Request $request)
    {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('img'), $filename);

        Gallery::create([
            'image' => $filename
        ]);

        return redirect('/admin/gallery');
    }

   public function deleteGallery($id)
    {
        $img = Gallery::find($id);

        if ($img) {
            $path = public_path('img/' . $img->image);
            if (file_exists($path)) {
                unlink($path);
            }
            $img->delete();
        }

        return back();
    }
}