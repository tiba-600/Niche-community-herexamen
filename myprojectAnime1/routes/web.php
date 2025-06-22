<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    CountryController,
    DashboardController,
    EventController,
    PageController,
    PostController,
    ProductsController,
    ProfileController
};


// Homepage
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/countries', [CountryController::class, 'index'])->name('countries.index');
Route::get('/', [PageController::class, 'index'])->name('countries.index');

// Contactpagina
Route::view('/contact', 'contact')->name('contact');

// Zoek landen
Route::get('/countries', [CountryController::class, 'search'])->name('countries.search');

// Detailpagina voor een land
Route::get('/countries/{id}/detail', [CountryController::class, 'detail'])->name('countries.detail');


Route::get('/countries/create', [CountryController::class, 'create'])->name('countries.create');
Route::post('/countries', [CountryController::class, 'store'])->name('countries.store');
Route::get('/countries/{id}/edit', [CountryController::class, 'edit'])->name('countries.edit');
Route::put('/countries/{id}', [CountryController::class, 'update'])->name('countries.update');


Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');
Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::delete('/dashboard/{id}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');
});



Route::post('/countries/{id}/comments/store', [PostController::class, 'store'])->name('countries.comments.store');
Route::get('/countries/{country}/comments/{post}/edit', [PostController::class, 'edit'])->name('countries.comments.edit');
Route::patch('/countries/{country}/comments/{post}', [PostController::class, 'update'])->name('countries.comments.update');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
