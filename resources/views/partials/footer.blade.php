<footer class="footer-section pt-5 pb-3">

    <div class="container-fluid">
        <div class="row text-start">

            <!-- BRAND -->
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <h3 class="footer-logo">HOTE 🍗</h3>

                <p class="footer-text">
                    At HOTE, we serve fresh, delicious meals made with quality ingredients.
                    From crispy fried chicken to cheesy pizzas, every bite is crafted to satisfy your cravings.
                </p>
            </div>

            <!-- QUICK LINKS -->
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <h5 class="footer-title">Quick Links</h5>

                <ul class="footer-links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ route('menu') }}">Menu</a></li>
                    <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>

            <!-- CONTACT -->
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <h5 class="footer-title">Contact</h5>

                <p class="footer-text">📍 Traffic Signal Junction, Vengalloor, Thodupuzha, Kerala 685608</p>
                <p class="footer-text">📞 +91 6238276832</p>
                <p>
                    <a href="mailto:support@hote.com" class="footer-mail">
                        📧 support@hote.com
                    </a>
                </p>
            </div>

            <!-- SOCIAL -->
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <h5 class="footer-title">Follow Us</h5>

                <div class="social-links">
                    <a href="https://www.instagram.com/">📷 Instagram</a>
                    <a href="https://www.facebook.com/">📘 Facebook</a>
                    <a href="https://twitter.com/">🐦 Twitter</a>
                </div>
            </div>

        </div>

        <hr class="footer-line">

        <p class="text-center footer-copy">
            © {{ date('Y') }} HOTE Restaurant. All rights reserved.
        </p>

    </div>

</footer>