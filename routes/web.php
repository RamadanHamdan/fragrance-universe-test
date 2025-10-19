<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::resource('/products', ProductController::class);

Route::get('/home', function () {
    return view('home',['title' => 'Home - Fragrance Universe']);
});

Route::get('/about', function () {
    return view('about',['title' => 'About - Fragrance Universe']);
});

Route::get('/contact', function () {
    return view('contact',['title' => 'Contact - Fragrance Universe']);
});

Route::get('/collections', function () {
    return view('collections',['title' => 'Collections - Fragrance Universe']);
});

Route::get('/find', function () {
    return view('find',['title' => 'Find Your Scent - Fragrance Universe']);
});

Route::get('products.drop', function () {
    return view('products.drop',['title' => 'Drop Your Scent - Fragrance Universe']);
});