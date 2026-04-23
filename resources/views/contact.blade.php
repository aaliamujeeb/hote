@extends('layouts.app')

@section('content')

@include('partials.navbar')

<div class="container-fluid contact-page">

    <!-- TITLE -->
    <h1 class="text-center contact-title">Contact Us 📞</h1>
    <p class="text-center contact-subtitle">
        We'd love to hear from you!
    </p>

    <div class="row mt-5 g-4">

        <!-- LEFT: CONTACT INFO -->
        <div class="col-12 col-sm-6 col-md-5">
            <div class="contact-info">

                <h4>📍 Address</h4>
                <p>Traffic Signal Junction, Vengalloor, Thodupuzha, Kerala 685608</p>

                <h4>📞 Phone</h4>
                <p>+91 6238276832</p>

                <h4>📧 Email</h4>
                <p><a href="mailto:support@hote.com" style="color: #f5e6b0;">support@hote.com</a></p>

                <h4>⏰ Opening Hours</h4>
                <p>Mon - Sun: 10:00 AM - 11:00 PM</p>

            </div>
        </div>

        <!-- RIGHT: CONTACT FORM -->
        <div class="col-12 col-sm-6 col-md-7">

            <form method="POST" action="/contact">

                @csrf

                <!-- SUCCESS MESSAGE -->
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- NAME -->
                <div class="mb-3">
                    <label>Your Name</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <!-- EMAIL -->
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <!-- MESSAGE -->
                <div class="mb-3">
                    <label>Message</label>
                    <textarea name="message" class="form-control" rows="5"></textarea>
                </div>

                <button type="submit" class="btn btn-warning w-100">
                    Send Message 🚀
                </button>

            </form>

        </div>

    </div>

    <!-- GOOGLE MAP -->
    <div class="map-section mt-5">

        <h3 class="text-center mb-3">📍 Find Us Here</h3>

        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps?q=9.9087253,76.7025958&hl=en&z=17&output=embed"
                width="100%" 
                height="400" 
                style="border:0;" 
                loading="lazy">
            </iframe>
        </div>

    </div>

</div>

<!-- ⭐ REVIEW FORM -->
@include('review')

@include('partials.footer')
@endsection