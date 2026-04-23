@extends('layouts.app')

@section('content')

@include('partials.navbar')

<div id="about-page">

    <div class="container-fluid about-section">

        <!-- TITLE -->
        <h1 class="text-center mb-3"><strong>About Hote 🍽️</strong></h1>
        <p id="about-description" class="text-center mb-5">
            Serving love, flavor, and happiness since day one
        </p>

        <!-- WELCOME SECTION (WITH SLIDING IMAGE) -->
        <div class="row align-items-center mb-5">

            <!-- LEFT IMAGE -->
            <div class="col-md-6">

                <div class="slide-image">
                    <img src="{{ asset('img/about.jpg') }}" alt="About Hote" class="img-fluid rounded shadow">
                </div>


            </div>

            <!-- RIGHT TEXT -->
            <div class="col-12 col-sm-6 col-md-6 text-center about-content">

                <h3>Welcome to Hote</h3>

                <p class="about-text">
                    At <b>Hote</b>, we believe that food is more than just a meal — it is an experience that brings people together.
                    Our restaurant is built on a passion for serving freshly prepared dishes that combine authentic taste with modern flavors.
                    From carefully selected ingredients to expert preparation, every step is taken to ensure quality and satisfaction.
                    We take pride in maintaining a clean, welcoming, and comfortable environment where guests can relax and enjoy their time.
                    Our team is dedicated to providing friendly service and making every visit memorable.
                    Whether you are dining with family, friends, or alone, we strive to make you feel valued and at home.
                    At Hote, every plate tells a story of care, taste, and dedication.
                </p>

            </div>

        </div>

        <!-- OWNER -->
        <div class="owner-box mt-4 mb-5">
            <h5>👨‍🍳 Owner</h5>
            <p><b>Aliya Mujeeb</b></p>
            <p>
                Passionate about food and hospitality, Aliya founded Hote with a vision to create a place where people can enjoy delicious meals in a warm and welcoming atmosphere.
                With years of experience in the culinary industry, she ensures high quality and taste in every dish.
            </p>
        </div>

        <!-- VALUES + SPECIALITY -->
        <div class="about-box mb-5">

            <div class="row g-4">

                <!-- VALUES -->
                <div class="col-12 col-sm-6 col-md-6">

                    <div class="info-card">

                        <h3 class="text-center mb-3">Our Values ❤️</h3>

                        <p>
                            Quality, hygiene, customer satisfaction, and love for food are the core values of Hote.
                            We believe every customer deserves the best dining experience.
                        </p>

                    </div>

                </div>

                <!-- SPECIALITY -->
                <div class="col-12 col-sm-6 col-md-6">

                    <div class="info-card">

                        <h3 class="text-center mb-3">Our Speciality 🍲</h3>

                        <div class="text-center">
                            <p>🔥 Fresh Ingredients</p>
                            <p>🍽️ Authentic Taste</p>
                            <p>⚡ Fast Service</p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

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
    </div>

    

</div>


@include('partials.footer')

@endsection