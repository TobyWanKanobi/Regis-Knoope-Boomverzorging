<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OfferController;

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
    return view('home');
});

Route::get('/van-boom-tot-meubel', function () {
    return view('tree-to-furniture');
});

Route::get('/boomverzorging', function () {
    return view('boomverzorging');
});

Route::get('/winkel', function () {
    return view('store');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');

Route::resource('admin/offers', OfferController::class)->only([
    'index', 'store', 'show', 'create', 'edit', 'destroy', 'update'
]);

Route::resource('admin/users', UserController::class)->only([
    'index', 'store', 'show', 'create', 'edit', 'destroy', 'update'
]);

Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);