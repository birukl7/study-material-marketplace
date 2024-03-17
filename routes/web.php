<?php 

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ModerationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ResourceCollectionController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SellerDashboardController;
use Illuminate\Support\Facades\Route;

use App\Models\Resource;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    $resources = Resource::all();
    return view('home' , ['resources' => $resources]);
});

// Auth routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [SellerDashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Resource routes
Route::prefix('resources')->group(function () {
    Route::get('/', [ResourceController::class, 'index'])->name('resources.index');
    Route::get('/create', [ResourceController::class, 'create'])->name('resources.create');
    Route::post('/', [ResourceController::class, 'store'])->name('resources.store');
    Route::get('/{resource}', [ResourceController::class, 'show'])->name('resources.show');
    Route::get('/{resource}/edit', [ResourceController::class, 'edit'])->name('resources.edit');
    Route::put('/{resource}', [ResourceController::class, 'update'])->name('resources.update');
    Route::delete('/{resource}', [ResourceController::class, 'destroy'])->name('resources.destroy');
});

// Purchase routes
Route::prefix('purchases')->group(function () {
    Route::get('/', [PurchaseController::class, 'index'])->name('purchases.index');
    Route::get('/{purchase}', [PurchaseController::class, 'show'])->name('purchases.show');
    Route::post('/', [PurchaseController::class, 'store'])->name('purchases.store');
    Route::put('/{purchase}', [PurchaseController::class, 'update'])->name('purchases.update');
    Route::delete('/{purchase}', [PurchaseController::class, 'destroy'])->name('purchases.destroy');
});

// Other resource routes
Route::resource('categories', CategoryController::class)->except(['show']);
Route::resource('departments', DepartmentController::class)->except(['show']);
Route::resource('courses', CourseController::class)->except(['show']);
Route::resource('moderations', ModerationController::class)->except(['show']);
Route::resource('ratings', RatingController::class)->except(['show']);
Route::resource('reviews', ReviewController::class)->except(['show']);
Route::resource('resource_collections', ResourceCollectionController::class)->except(['show']);

Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});

Route::prefix('departments')->group(function () {
    Route::get('/', [DepartmentController::class, 'index'])->name('departments.index');
    Route::post('/', [DepartmentController::class, 'store'])->name('departments.store');
    Route::get('/{department}/edit', [DepartmentController::class, 'edit'])->name('departments.edit');
    Route::put('/{department}', [DepartmentController::class, 'update'])->name('departments.update');
    Route::delete('/{department}', [DepartmentController::class, 'destroy'])->name('departments.destroy');
});

Route::prefix('courses')->group(function () {
    Route::get('/', [CourseController::class, 'index'])->name('courses.index');
    Route::post('/', [CourseController::class, 'store'])->name('courses.store');
    Route::get('/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');
    Route::put('/{course}', [CourseController::class, 'update'])->name('courses.update');
    Route::delete('/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');
});

Route::prefix('moderations')->group(function () {
    Route::get('/', [ModerationController::class, 'index'])->name('moderations.index');
    Route::post('/', [ModerationController::class, 'store'])->name('moderations.store');
    Route::get('/{moderation}/edit', [ModerationController::class, 'edit'])->name('moderations.edit');
    Route::put('/{moderation}', [ModerationController::class, 'update'])->name('moderations.update');
    Route::delete('/{moderation}', [ModerationController::class, 'destroy'])->name('moderations.destroy');
});

Route::prefix('ratings')->group(function () {
    Route::get('/', [RatingController::class, 'index'])->name('ratings.index');
    Route::post('/', [RatingController::class, 'store'])->name('ratings.store');
    Route::get('/{rating}/edit', [RatingController::class, 'edit'])->name('ratings.edit');
    Route::put('/{rating}', [RatingController::class, 'update'])->name('ratings.update');
    Route::delete('/{rating}', [RatingController::class, 'destroy'])->name('ratings.destroy');
});

Route::prefix('reviews')->group(function () {
    Route::get('/', [ReviewController::class, 'index'])->name('reviews.index');
    Route::post('/', [ReviewController::class, 'store'])->name('reviews.store');
    Route::get('/{review}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
    Route::put('/{review}', [ReviewController::class, 'update'])->name('reviews.update');
    Route::delete('/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
});

Route::prefix('resource_collections')->group(function () {
    Route::get('/', [ResourceCollectionController::class, 'index'])->name('resource_collections.index');
    Route::post('/', [ResourceCollectionController::class, 'store'])->name('resource_collections.store');
    Route::get('/{resourceCollection}/edit', [ResourceCollectionController::class, 'edit'])->name('resource_collections.edit');
    Route::put('/{resourceCollection}', [ResourceCollectionController::class, 'update'])->name('resource_collections.update');
    Route::delete('/{resourceCollection}', [ResourceCollectionController::class, 'destroy'])->name('resource_collections.destroy');
});

require __DIR__.'/auth.php';
