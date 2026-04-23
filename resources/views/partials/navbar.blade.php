<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow sticky-top">
  <div class="container">

    <a class="navbar-brand fw-bold text-warning" href="{{ url('/') }}">
        HOTE 🍗
    </a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">   
         <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="nav">
        <ul class="navbar-nav">

            <li class="nav-item">
               <a class="nav-link {{ request()->segment(1) == null ? 'active' : '' }}" href="/">Home</a>
            </li>

           <li class="nav-item">
                <a class="nav-link {{ request()->segment(1) == 'about' ? 'active' : '' }}" href="/about">About</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->segment(1) == 'menu' ? 'active' : '' }}" href="{{route('menu') }}">Menu</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->segment(1) == 'gallery' ? 'active' : '' }}" href="{{ url('/gallery') }}">Gallery</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->segment(1) == 'contact' ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a>
            </li>

            <li class="nav-item ms-2">
                <a class="btn btn-warning btn-sm" href="{{ url('/menu') }}">
                    Order Now
                </a>
            </li>

        </ul>
    </div>

  </div>
</nav>