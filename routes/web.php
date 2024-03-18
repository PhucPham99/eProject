<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ClientController;

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
    return view('welcome');
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

Route::prefix('clients')->name('page.')->group(function () {
    Route::get('home',[ClientController::class,'home'])->name('home');
    Route::get('shop',[ClientController::class,'shop'])->name('shop');
    Route::get('gallery',[ClientController::class,'gallery'])->name('gallery');
    Route::get('contact',[ClientController::class,'contact'])->name('contact');
    Route::get('compare',[ClientController::class,'compare'])->name('compare');
    Route::get('checkout',[ClientController::class,'checkout'])->name('checkout');
    Route::get('cart',[ClientController::class,'cart'])->name('cart');
    Route::get('blog',[ClientController::class,'blog'])->name('blog');
    Route::get('aboutUs',[ClientController::class,'aboutUs'])->name('aboutUs');
    Route::get('productdetail',[ClientController::class,'productDetail'])->name('productdetail');
    Route::get('account',[ClientController::class,'account'])->name('account');
    Route::get('login',[ClientController::class,'login'])->name('login');

});
 



