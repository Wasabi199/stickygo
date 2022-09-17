<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\StickersController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/dashboard',[IndexController::class,'index'])->name('dashboard');
Route::get('/AboutUs',[IndexController::class,'aboutUs'])->name('aboutUs');
Route::get('/Shop',[IndexController::class,'shop'])->name('shop');
Route::get('/Contact',[IndexController::class,'contact'])->name('contact');
// Route::get('/Login',[IndexController::class,'login'])->name('login');
// Route::get('/Register',[IndexController::class,'register'])->name('register');
Route::get('/Cart',[IndexController::class,'cart'])->name('cart');
Route::get('/addToCart/{id}',[StickersController::class,'addToCart'])->name('addToCart');

Route::post('/addToCart/Update',[StickersController::class,'btnUpdateQuantity'])->name('btnUpdateQuantity');
Route::delete('/addToCart/Delete',[StickersController::class,'cartDeleteItem'])->name('cartItemDelete');

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return Inertia::render('Dashboard');
//     })->name('dashboard');
// });
