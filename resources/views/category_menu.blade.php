@extends('layouts.app')

@section('content')

@include('partials.navbar')

<div class="container-fluid menu-page">

    <!-- CATEGORY TITLE -->
    <h1 class="text-center menu-title">
        {{ $category->name }} 🍽️
    </h1>

    <p class="text-center menu-subtitle">
        Explore delicious {{ $category->name }} items
    </p>

    <!-- WHATSAPP BUTTON -->
    <div class="text-end mb-3 px-3">
            <br>
            <button class="btn btn-success" id="whatsapp-btn">
                Continue With The Order On WhatsApp 🟢
            </button>
        <button class="btn btn-success" id="whatsapp-btn">
            Continue With The Order On WhatsApp 🟢
        </button>
    </div>

    <!-- MENU ITEMS -->
    <div class="row mt-4 g-4">

        @forelse($menus as $menu)

        <div class="col-12 col-sm-6 col-md-4">

            <div class="menu-card p-3 text-center">

                <!-- IMAGE -->
                <img src="{{ asset('img/' . $menu->image) }}"
                     class="menu-img img-fluid">

                <!-- NAME -->
                <h4>{{ $menu->title }}</h4>

                <!-- DESCRIPTION -->
                <p>{{ $menu->description }}</p>

                <!-- PRICE -->
                <span class="text-warning fw-bold">₹{{ $menu->price }}</span>

                <!-- QUANTITY -->
                <div class="qty-box mt-3"
                     data-name="{{ $menu->title }}"
                     data-price="{{ $menu->price }}">

                    <button class="qty-btn minus">−</button>

                    <span class="qty-value">0</span>

                    <button class="qty-btn plus">+</button>

                </div>

            </div>

        </div>

        @empty

        <div class="text-center">
            <h4>No items found 😢</h4>
        </div>

        @endforelse

    </div>

</div>

@include('partials.footer')

@endsection