@extends('layouts.app')

@section('content')

@include('partials.navbar')

<div class="container-fluid menu-page">

    <!-- TITLE -->
    <h1 class="text-center menu-title">Our Menu 🍽️</h1>

    <p class="text-center menu-subtitle">
        Taste delicious food made with love and fresh ingredients
    </p>

    <!-- CATEGORY FILTER -->
    <div class="container text-center mt-3">

        <!-- ALL BUTTON -->
        <a href="{{ url('/menu') }}" class="btn btn-dark btn-sm m-1">
            All
        </a>

        <!-- CATEGORY BUTTONS -->
        @foreach($categories as $category)

            <a href="{{ url('/menu/category/'.$category->id) }}"
               class="btn btn-warning btn-sm m-1">

                {{ $category->name }}

            </a>

        @endforeach

    </div>

    

    <!-- MENU ITEMS -->
    <div class="row mt-4 g-4">

        @forelse($items as $item)

            <div class="col-12 col-sm-6 col-md-4">

                <div class="menu-card p-3 text-center">

                    <!-- IMAGE -->
                    <img src="{{ asset('img/' . $item->image) }}" class="menu-img img-fluid">

                    <!-- NAME -->
                    <h4>{{ $item->title }}</h4>

                    <!-- DESCRIPTION -->
                    <p>{{ $item->description }}</p>

                    <!-- PRICE -->
                    <span class="text-warning fw-bold">₹{{ $item->price }}</span>

                    <!-- QUANTITY UI -->
                    <div class="qty-box mt-3"
                         data-name="{{ $item->title }}"
                         data-price="{{ $item->price }}">

                        <button class="qty-btn minus">−</button>

                        <span class="qty-value">0</span>

                        <button class="qty-btn plus">+</button>

                    </div>
                    <button class="btn btn-success mt-3 order-btn">
                        Order on WhatsApp 🟢
                    </button>

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