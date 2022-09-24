<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\StickersController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Termwind\Components\Raw;

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
// Routing Pages
Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/dashboard',[IndexController::class,'index'])->name('dashboard');
Route::get('/AboutUs',[IndexController::class,'aboutUs'])->name('aboutUs');
Route::get('/Shop',[IndexController::class,'shop'])->name('shop');
Route::get('/Contact',[IndexController::class,'contact'])->name('contact');
Route::get('/Cart',[IndexController::class,'cart'])->name('cart');
Route::get('/Shop/Product/{id}',[IndexController::class,'productProfile'])->name('product');
Route::get('/History',[IndexController::class,'history'])->name('history');
Route::get('/Help',[IndexController::class,'help'])->name('help');

Route::get('/Checkout',[StickersController::class,'checkout'])->name('checkout');


Route::post('/addToCart',[StickersController::class,'addToCart'])->name('addToCart');


// Routing Functions
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
