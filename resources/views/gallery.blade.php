@extends('layouts.app')

@section('content')
@include('partials.navbar')

<div class="container-fluid gallery-page">

    <h1 class="text-center gallery-title">Our Gallery 📸</h1>
    <p class="text-center gallery-subtitle">
        Explore our food, space, and happy moments
    </p>

    <!-- DYNAMIC GALLERY -->
<div class="row g-4">

@foreach($images as $img)

<div class="col-md-3">

    <div class="gallery-card">

        <img src="{{ asset('img/' . $img->image) }}"
             class="gallery-img"
             onclick="openLightbox(this.src)">

    </div>

</div>

@endforeach

</div>

</div>
<div id="lightbox" onclick="closeLightbox()">
    <img id="lightbox-img">
</div>

@include('partials.footer')
@endsection