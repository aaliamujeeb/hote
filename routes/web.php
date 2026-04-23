<?php

use Illuminate\Support\Facades\Route;

/* ================= CONTROLLERS ================= */
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MarqueeController;

/* ================= HOME ================= */
Route::get('/', [HomeController::class, 'index']);

/* ================= ABOUT ================= */
Route::get('/about', [AboutController::class, 'index']);

/* ================= CONTACT ================= */
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);
Route::post('/review', [ContactController::class, 'storeReview']);

/* ================= FRONTEND MENU ================= */
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/menu/category/{id}', [MenuController::class, 'menuByCategory']);

/* ================= FRONTEND GALLERY ================= */
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery'); 
/* ================= FRONTEND CONTACTS ================= */
Route::get('/contacts', [ContactController::class, 'index']);

/* ================= CATEGORY CLICK (HOME) ================= */
Route::get('/category/{id}', [HomeController::class, 'categoryMenu']);

/* =================================================
   ADMIN AUTH
================================================= */
Route::get('/admin', [AdminController::class, 'loginPage']);
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/logout', [AdminController::class, 'logout']);

/* ================= ADMIN DASHBOARD ================= */
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

/* ================= ADMIN MENU (FOOD) ================= */
Route::get('/admin/menu', [AdminController::class, 'menu']);
Route::post('/admin/add-menu', [AdminController::class, 'addMenu']);

Route::get('/admin/edit-menu/{id}', [AdminController::class, 'editMenu']);
Route::post('/admin/update-menu/{id}', [AdminController::class, 'updateMenu']);

Route::get('/admin/delete-menu/{id}', [AdminController::class, 'deleteMenu']);
Route::get('/admin/menu/create', [AdminController::class, 'createMenu']);

/* ================= ADMIN CATEGORIES ================= */
Route::get('/admin/categories', [CategoryController::class, 'index']);
Route::get('/admin/categories/create', [CategoryController::class, 'create']);
Route::post('/admin/categories', [CategoryController::class, 'store']);
Route::get('/admin/delete-category/{id}', [CategoryController::class, 'delete']);
Route::get('/admin/categories/edit/{id}', [CategoryController::class, 'edit']);
Route::post('/admin/categories/update/{id}', [CategoryController::class, 'update']);

/* ================= ADMIN OFFERS ================= */
Route::get('/admin/offers', [AdminController::class, 'offers']);
Route::get('/admin/offers/create', [AdminController::class, 'createOffer']);
Route::post('/admin/offers', [AdminController::class, 'addOffer']);

Route::get('/admin/edit-offer/{id}', [AdminController::class, 'editOffer']);
Route::post('/admin/update-offer/{id}', [AdminController::class, 'updateOffer']);

Route::get('/admin/delete-offer/{id}', [AdminController::class, 'deleteOffer']);

/* ================= ADMIN GALLERY ================= */
Route::get('/admin/gallery', [AdminController::class, 'gallery']);
Route::get('/admin/gallery/create', [AdminController::class, 'createGallery']);
Route::post('/admin/gallery', [AdminController::class, 'addGallery']);
Route::get('/admin/delete-gallery/{id}', [AdminController::class, 'deleteGallery']);

/* ================= ADMIN CONTACTS ================= */
Route::get('/admin/contacts', [AdminController::class, 'contacts']);

/* ================= ADMIN REVIEWS ================= */
Route::get('/admin/reviews', [AdminController::class, 'reviews']);

/* ================= DELETE ================= */
Route::get('/admin/delete-contact/{id}', [AdminController::class, 'deleteContact']);
Route::get('/admin/delete-review/{id}', [AdminController::class, 'deleteReview']);

/* ================= ADMIN MARQUEE ================= */
Route::get('/admin/marquee', [MarqueeController::class, 'index']);
Route::post('/admin/marquee', [MarqueeController::class, 'store']);
Route::get('/admin/delete-marquee/{id}', [MarqueeController::class, 'delete']);
Route::get('/admin/edit-marquee/{id}', [MarqueeController::class, 'edit']);
Route::post('/admin/update-marquee/{id}', [MarqueeController::class, 'update']);
Route::get('/admin/marquee/create', [MarqueeController::class, 'create']);