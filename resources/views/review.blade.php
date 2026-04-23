<!-- ================= REVIEW SECTION ================= -->
<form action="/review" method="POST">
    @csrf

    @if(session('success_review'))
        <div class="alert alert-success">
            {{ session('success_review') }}
        </div>
    @endif

    <div class="review-video-section">

        <!-- 🎥 BACKGROUND VIDEO -->
        <video autoplay muted loop playsinline>
            <source src="statimg/hote vdo.mp4" type="video/mp4">
        </video>

        <!-- 📝 REVIEW FORM -->
        <div class="review-form-box">

            <h3 class="text-center text-warning mb-3">Leave a Review ✍️</h3>

            <!-- NAME -->
            <input type="text"
                   name="name"
                   class="form-control mb-3"
                   placeholder="Your Name">

            <!-- RATING -->
            <select name="rating" class="form-control mb-3">
                <option value="">⭐ Rating</option>
                <option value="5">⭐⭐⭐⭐⭐</option>
                <option value="4">⭐⭐⭐⭐</option>
                <option value="3">⭐⭐⭐</option>
                <option value="2">⭐⭐</option>
                <option value="1">⭐</option>
            </select>

            <!-- MESSAGE -->
            <textarea name="review"
                      class="form-control mb-3"
                      rows="4"
                      placeholder="Write your review..."></textarea>

            <!-- BUTTON -->
            <button type="submit" class="btn btn-warning w-100">
                Submit Review
            </button>

        </div>

    </div>
</form>
<!-- ================= END REVIEW SECTION ================= -->