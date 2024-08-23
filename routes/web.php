<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
    // auth
    Route::get('/sign-in', [AuthController::class, 'signIn'])->name('login');
    Route::post('/authenticate', [AuthController::class, 'authenticate']);
    Route::get('/sign-up', [AuthController::class, 'signUp'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Dimatikan karena ini hanya route utk ujicoba login di awal project.
// Route::get('/', function(){
//     if(Auth::check()) {
//         echo "Selamat Datang, " . Auth::user()->name . " !";
//     }else{
//         echo "Selamat Datang, Anda Harus Login..";
//     }

// });

// Gantinya yg ini dihidupkan
Route::get('/', [IndexController::class, 'index']);

Route::middleware('auth')->group(function () {

    Route::middleware('guestAdmin')->group(function () {
        // dashboard
        Route::get('/dashboard', [DashboardController::class, 'index']);

        // user
        Route::get('/user', [UserController::class, 'index']);
        Route::get('/user/create', [UserController::class, 'create']);
        Route::post('/user/store', [UserController::class, 'store']);
        Route::get('/user/show/{user}', [UserController::class, 'show']);
        Route::get('/user/edit/{user}', [UserController::class, 'edit']);
        Route::post('/user/update/{user}', [UserController::class, 'update']);
        Route::get('/user/destroy/{user}', [UserController::class, 'destroy']);

        // product
        Route::get('/product', [ProductController::class, 'index']);
        Route::get('/product/create', [ProductController::class, 'create']);
        Route::post('/product/store', [ProductController::class, 'store']);
        Route::get('/product/show/{product}', [ProductController::class, 'show']);
        Route::get('/product/edit/{product}', [ProductController::class, 'edit']);
        Route::post('/product/update/{product}', [ProductController::class, 'update']);
        Route::get('/product/destroy/{product}', [ProductController::class, 'destroy']);

        // order

        Route::get('/ordering', [InvoiceController::class, 'indexBackend']);
        Route::get('/ordering/show/{invoice}', [InvoiceController::class, 'showBackend']);
        Route::post('/ordering/update/{invoice}', [InvoiceController::class, 'updateStatus']);
        Route::get('/ordering/destroy/{invoice}', [InvoiceController::class, 'destroyBackend']);
    });

    Route::post('/order', [CartController::class, 'store']);

    Route::get('/cart', [CartController::class, 'indexFrontend']);
    Route::get('/cart-delete/{cart}', [CartController::class, 'destroy']);
    Route::get('/cart-min/{cart}', [CartController::class, 'min']);
    Route::get('/cart-plus/{cart}', [CartController::class, 'plus']);

    Route::post('/checkout', [InvoiceController::class, 'store']);
    Route::get('/invoice/{invoiceCode}', [InvoiceController::class, 'indexFrontend']);

    Route::get('/history', [InvoiceController::class, 'history']);

    Route::get('logout', [AuthController::class, 'logout']);

});
