<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="admin-wrapper">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h4 class="logo">🍽 Admin</h4>

        <a href="/admin/dashboard">📊 Dashboard</a>
        <a href="/admin/menu">🍔 Menu</a>
        <a href="/admin/categories">📂 Categories</a>
        <a href="/admin/offers">🔥 Offers</a>
        <a href="/admin/marquee">📢 Marquee</a>
        <a href="/admin/contacts">📩 Contacts</a>
        <a href="/admin/reviews">⭐ Reviews</a>
        <a href="/admin/gallery">📸 Gallery</a>

        <hr>

        <a href="/admin/logout" class="logout">🚪 Logout</a>
    </div>

    <!-- CONTENT -->
    <div class="content">
        @yield('content')
    </div>

</div>

</body>
</html>