<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\GuestController;

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


Route::name('page.')->group(function () {
    Route::get('/',[GuestController::class,'home'])->name('home');
    Route::get('shop',[GuestController::class,'shop'])->name('shop');
    Route::get('contact',[GuestController::class,'contact'])->name('contact');
    Route::get('compare',[GuestController::class,'compare'])->name('compare');
    Route::get('checkout',[GuestController::class,'checkout'])->name('checkout');
    Route::get('cart',[GuestController::class,'cart'])->name('cart');
    Route::get('blog',[GuestController::class,'blog'])->name('blog');
    Route::get('aboutus',[GuestController::class,'aboutUs'])->name('aboutus');
    Route::get('productdetail',[GuestController::class,'productDetail'])->name('productdetail');
    Route::get('account',[GuestController::class,'account'])->name('account');
    Route::get('login',[GuestController::class,'showLogin'])->name('login');
    Route::post('login',[GuestController::class,'Login'])->name('login');

});

Route::prefix('admin')->name('admin.')->controller(CategoryController::class)->group(function () {
    Route::prefix('category')->name('category.')->group(function() {
        Route::get('index','index')->name('index');

        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');

        Route::get('edit/{id}','edit')->name('edit');
        Route::post('update/{id}','update')->name('update');

        Route::get('destroy/{id}','destroy')->name('destroy');
    });

    Route::prefix('product')->name('product.')->controller(ProductController::class)->group(function() {
        Route::get('index','index')->name('index');

        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');

        Route::get('edit/{id}','edit')->name('edit');
        Route::post('update/{id}','update')->name('update');

        Route::get('destroy/{id}','desroy')->name('destroy');
    });
    
    Route::prefix('user')->name('user.')->controller(UserController::class)->group(function() {
        Route::get('index','index')->name('index');

        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');

        Route::get('edit/{id}','edit')->name('edit');
        Route::post('update/{id}','update')->name('update');
        
        Route::get('destroy/{id}','destroy')->name('destroy');
    });
    
});


Route::prefix('client')->name('page.')->group(function () {
    Route::get('/',[ClientController::class,'home'])->name('home');
    Route::get('shop',[ClientController::class,'shop'])->name('shop');
    Route::get('gallery',[ClientController::class,'gallery'])->name('gallery');
    Route::get('contact',[ClientController::class,'contact'])->name('contact');
    Route::get('compare',[ClientController::class,'compare'])->name('compare');
    Route::get('checkout',[ClientController::class,'checkout'])->name('checkout');
    Route::get('cart',[ClientController::class,'cart'])->name('cart');
    Route::get('blog',[ClientController::class,'blog'])->name('blog');
    Route::get('aboutus',[ClientController::class,'aboutUs'])->name('aboutus');
    Route::get('productdetail',[ClientController::class,'productDetail'])->name('productdetail');
    Route::get('account',[ClientController::class,'account'])->name('account');
    

});
 



