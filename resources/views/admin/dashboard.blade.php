@extends('admin.layout')

@section('content')

<h1 class="text-warning mb-4">📊 Admin Dashboard</h1>

<!-- WELCOME BOX -->
<div class="card bg-dark text-white p-4 mb-4">
    <h3>👋 Welcome Admin!</h3>
    <p>Manage your restaurant easily from here.</p>
</div>

<!-- STATS CARDS -->
<div class="row g-4">

    <!-- CONTACTS -->
    <div class="col-md-4">
        <div class="card bg-dark text-white p-4 text-center">
            <h4>📩 Messages</h4>
            <h2 class="text-warning">{{ $totalContacts }}</h2>
            <a href="/admin/contacts" class="btn btn-warning btn-sm">View Messages</a>
        </div>
    </div>

    <!-- REVIEWS -->
    <div class="col-md-4">
        <div class="card bg-dark text-white p-4 text-center">
            <h4>⭐ Reviews</h4>
            <h2 class="text-warning">{{ $totalReviews }}</h2>
            <a href="/admin/reviews" class="btn btn-warning btn-sm">View Reviews</a>
        </div>
    </div>

    <!-- MENU ITEMS -->
    <div class="col-md-4">
        <div class="card bg-dark text-white p-4 text-center">
            <h4>🍔 Menu Items</h4>
            <h2 class="text-warning">{{ $totalMenu }}</h2>
            <a href="/admin/menu" class="btn btn-warning btn-sm">View Menu</a>  
        </div>
    </div>
    <!-- CATEGORIES -->
    <div class="col-md-4">
        <div class="card bg-dark text-white p-4 text-center">
            <h4>📂 Categories</h4>
            <h2 class="text-warning">{{ $totalCategories }}</h2>
            <a href="/admin/categories" class="btn btn-warning btn-sm">View Categories</a>  
        </div>
    </div>
    <!-- OFFERS -->
    <div class="col-md-3">
        <div class="card bg-dark text-white p-4 text-center">
            <h4>🔥 Offers</h4>
            <h2 class="text-warning">{{ $totalOffers }}</h2>
            <a href="/admin/offers" class="btn btn-warning btn-sm">View Offers</a>
        </div>
    </div>
    <!-- MARQUEE -->
    <div class="col-md-3">  
        <div class="card bg-dark text-white p-4 text-center">
            <h4>📢 Marquees</h4>
            <h2 class="text-warning">{{ $totalMarquees }}</h2>
            <a href="/admin/marquee" class="btn btn-warning btn-sm">View Marquees</a>
        </div>
    </div>
    <!-- GALLERY -->
    <div class="col-md-4">
        <div class="card bg-dark text-white p-4 text-center">
            <h4>📸 Gallery</h4>
            <h2 class="text-warning">{{ $totalGallery }}</h2>
            <a href="/admin/gallery" class="btn btn-warning btn-sm">View Gallery</a>
        </div>
    </div>
</div>

</div>


@endsection