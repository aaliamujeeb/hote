@extends('layouts.app')
@section('content')
@include('partials.navbar')

<!-- HERO SECTION -->
<div class="hero-section d-flex align-items-center justify-content-center text-center text-white">

    <div class="hero-box px-3">
<h1 class="fw-bold text-warning display-3 hote-font">
    HOTE
</h1>
        <p class="lead mb-4">
            Crispy. Juicy. Irresistible.
        </p>

        <a href="{{ url('/menu') }}" class="btn btn-warning btn-lg px-4">
             Explore Menu
        </a>
    </div>

</div>
<!-- MARQUEE -->
<div class="offer-marquee">
    <div class="marquee-content">
        <span class="marquee-icon">🔥</span>

        @foreach($marquees as $m)
            <span class="marquee-item">{{ $m->text }}</span>
        @endforeach

        <span class="marquee-icon">🍔</span>
    </div>
</div>
<!-- FULL ABOUT SECTION (IMAGE + TEXT) -->
<div class="container-fluid mt-5 mb-5">

    <div class="row align-items-center">

        <!-- IMAGE -->
        <div class="col-12 col-md-6 mb-3">
            <img src="https://images.pexels.com/photos/260922/pexels-photo-260922.jpeg"
                 class="img-fluid rounded shadow pro-img"
                 alt="About HOTE">
        </div>

        <!-- TEXT -->
        <div class="col-12 col-md-6">

            <h2 class="fw-bold">
                About <span class="text-warning">HOTE</span>
            </h2>

            <p class="text-muted">
                HOTE is a modern fast-food restaurant built for people who love delicious,
                crispy and fresh meals.
            </p>

            <p class="text-muted">
                From juicy burgers to crispy fried chicken and cheesy pizzas,
                every dish is prepared with care.
            </p>

            <a href="{{ url('/about') }}" class="btn btn-warning text-black">
                Read More →
            </a>

        </div>

    </div>

</div>
<!-- CAROUSEL -->
 <div class="container-fluid mt-5">

<div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <!-- INDICATORS -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"></button>
        </div>

        <!-- IMAGES -->
        <div class="carousel-inner rounded shadow">

            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38"
                     class="d-block w-100 carousel-img img-fluid"
                     alt="Food 1">

                <div class="carousel-caption">
                    <h2>Good food, good mood.</h2>
                </div>
            </div>

            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1550547660-d9450f859349"
                     class="d-block w-100 carousel-img img-fluid"
                     alt="Food 2">

                <div class="carousel-caption">
                    <h2>Savor the flavor.</h2>
                </div>
            </div>

            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1600891964599-f61ba0e24092"
                     class="d-block w-100 carousel-img img-fluid"
                     alt="Food 3">

                <div class="carousel-caption">
                    <h2>Where bold bites begin.</h2>
                </div>
            </div>

        </div>

        <!-- CONTROLS -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>

</div>

<!-- ABOUT SHORT SECTION -->
<div class="container-fluid text-center mt-5">
    <h2 class="fw-bold">Welcome to <span class="text-warning">HOTE</span></h2>
    <p class="text-muted mt-2">
        We serve high-quality fast food with fresh ingredients and bold flavors.
        Every bite is made to satisfy your cravings.
    </p>
</div>

<!-- FEATURES -->
<div class="container-fluid mt-4">
    <div class="row text-center">

        <div class="col-12 col-sm-6 col-md-4">
            <div class="p-4 feature-card shadow-sm rounded">
                <h4>🔥 Fresh Food</h4>
                <p class="text-muted">Prepared daily with fresh ingredients</p>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4">
            <div class="p-4 feature-card shadow-sm rounded">
                <h4>⚡ Fast Delivery</h4>
                <p class="text-muted">Hot food delivered quickly</p>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4">
            <div class="p-4 feature-card shadow-sm rounded">
                <h4>❤️ Great Taste</h4>
                <p class="text-muted">Flavor that keeps you coming back</p>
            </div>
        </div>

    </div>
</div>

<!-- ================= POPULAR CATEGORIES (SCROLL) ================= -->

<div class="container-fluid mt-5">

    <h3 class="text-center fw-bold mb-4">
        🍔 Popular Categories
    </h3>

    <div class="position-relative">

        <!-- LEFT BUTTON -->
        <button class="scroll-btn left" onclick="scrollCategories(-300)">❮</button>

        <!-- SCROLL CONTAINER -->
        <div class="category-scroll d-flex">

            @foreach($categories as $category)

                <div class="category-item text-center">

                    <a href="{{ url('/category/'.$category->id) }}" style="text-decoration:none; color:black;">

                        <div class="category-card shadow-sm rounded overflow-hidden">

                            <img src="{{ asset('img/'.$category->image) }}"
                                 class="img-fluid category-img">

                            <h5 class="p-2">{{ $category->name }}</h5>

                        </div>

                    </a>

                </div>

            @endforeach

        </div>

        <!-- RIGHT BUTTON -->
        <button class="scroll-btn right" onclick="scrollCategories(300)">❯</button>

    </div>

</div>

<!-- HOME MENU -->
<div class="container-fluid mt-5" id="homemenu">

    <div class="row align-items-center">

        <!-- TEXT -->
        <div class="col-12 col-md-6 mb-3">

            <h2 class="fw-bold">
                Our <span class="text-warning">Menu</span>
            </h2>

            <p class="text-muted">
                Explore a variety of delicious dishes made with fresh ingredients and authentic flavors.
        From spicy biryani to cheesy pizzas and refreshing desserts, we have something for everyone.
        <p>Taste the joy of food at <b>Hote</b> – where every bite matters.<p>
            </p>

            <a href="{{ url('/menu') }}" class="btn btn-warning">
                View Full Menu →
            </a>

        </div>

        <!-- IMAGE -->
        <div class="col-12 col-md-6 mb-3">
            <img src="https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg"
                 class="img-fluid rounded shadow"
                 alt="HOTE Menu">
        </div>

    </div>

</div>
<!-- SPECIAL OFFERS -->

<div class="container-fluid mt-5">

    <h2 class="text-center fw-bold mb-4">
        🔥 Special <span class="text-warning">Offers</span>
    </h2>

    <div class="row g-4 justify-content-center">

        @foreach($offers as $offer)

        <div class="col-md-4 mb-3">

            <div class="offer-card text-center p-3">

                <img src="{{ asset('img/' . $offer->image) }}" class="offer-img mb-2">

                <h4>{{ $offer->title }}</h4>
                <p>{{ $offer->description }}</p>
                <h5 class="text-warning">₹{{ $offer->price }}</h5>

                <!-- QTY BOX -->
                <div class="qty-box mt-3"
                     data-name="{{ $offer->title }}"
                     data-price="{{ $offer->price }}">

                    <button class="qty-btn minus">−</button>
                    <span class="qty-value">0</span>
                    <button class="qty-btn plus">+</button>

                </div>

                <!-- ✅ ORDER BUTTON OUTSIDE -->
                <div class="mt-3">
                    <button class="btn btn-success order-single">
                        Order Now 🟢
                    </button>
                </div>

            </div>

        </div>

        @endforeach

    </div>
</div>
       <!-- REVIEWS -->
<div class="mt-5 review-section">

    <h2 class="text-center mb-4">
        ⭐ What Our Customers Say
    </h2>

    <div class="review-scroll">

        <div class="review-track">

            @foreach($reviews as $review)
                <div class="review-card">
                    <div class="review-stars">
                        @for($i = 1; $i <= $review->rating; $i++)
                            ⭐
                        @endfor
                    </div>

                    <p>"{{ $review->review }}"</p>
                    <b>- {{ $review->name }}</b>
                </div>
            @endforeach

            {{-- duplicate for infinite scroll --}}
            @foreach($reviews as $review)
                <div class="review-card">
                    <div class="review-stars">
                        @for($i = 1; $i <= $review->rating; $i++)
                            ⭐
                        @endfor
                    </div>

                    <p>"{{ $review->review }}"</p>
                    <b>- {{ $review->name }}</b>
                </div>
            @endforeach

        </div>

    </div>

</div>
<!-- OPENING HOURS -->
<div class="container mt-5 text-center" id="hours">

    <h2 class="fw-bold mb-4">
        ⏰ Opening Hours
    </h2>

    <div class="hours-card mx-auto">

        <div class="hours-row">
            <span>Monday – Friday</span>
            <span>11:00 AM – 11:00 PM</span>
        </div>

        <div class="hours-row">
            <span>Saturday</span>
            <span>10:00 AM – 11:30 PM</span>
        </div>

        <div class="hours-row">
            <span>Sunday</span>
            <span>10:00 AM – 10:00 PM</span>
        </div>

        <div class="status-box mt-3">
            Status: <span id="openStatus"></span>
        </div>

    </div>

</div>
<br>
<br>
@include('review')
@include('partials.footer')
@endsection