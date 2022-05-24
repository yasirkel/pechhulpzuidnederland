<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/reviews', [App\Http\Controllers\ReviewController::class, 'index'])->name('reviews');


// dashboards

// user
Route::get('/user-dashboard', [App\Http\Controllers\UserController::class, 'index'])->name('user')->middleware('user');

// admin
Route::get('/admin-dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/garages', [App\Http\Controllers\GaragesController::class, 'getGarages'])->name('garages-overzicht')->middleware('admin');;
Route::get('/admin-dashboard/add', [App\Http\Controllers\GaragesController::class, 'viewCreateGarage'])->name('view-create-garage')->middleware('admin');
Route::post('/admin-dashboard/process-add', [App\Http\Controllers\GaragesController::class, 'createGarage'])->name('create-garage')->middleware('admin');
Route::get('/admin-dashboard/garages-disable/{id}', [App\Http\Controllers\GaragesController::class, 'disableGarage'])->name('disable-garage')->middleware('admin');
Route::get('/admin-dashboard/garages-enable/{id}', [App\Http\Controllers\GaragesController::class, 'enableGarage'])->name('enable-garage')->middleware('admin');
Route::get('/admin-dashboard/reviews', [App\Http\Controllers\ReviewController::class, 'getReviews'])->name('reviews-overzicht')->middleware('admin');
Route::get('/admin-dashboard/reviews-disable/{id}', [App\Http\Controllers\ReviewController::class, 'disableReview'])->name('disable-review')->middleware('admin');
Route::get('/admin-dashboard/reviews-enable/{id}', [App\Http\Controllers\ReviewController::class, 'enableReview'])->name('enable-review')->middleware('admin');

// garage
Route::get('/garage-dashboard', [App\Http\Controllers\garageController::class, 'index'])->name('garage')->middleware('garage');




