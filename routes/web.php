<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CLientProductController;
use Illuminate\Support\Facades\Auth;

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
    

    Route::get('compare',[GuestController::class,'compare'])->name('compare');

    Route::get('checkout',[CartController::class,'checkout'])->name('checkout');
    Route::get('cart',[CartController::class,'cart'])->name('cart');
    Route::get('add-to-cart/{id}/{quantity}',[CartController::class,'addToCart'])->name('addtocart');
    Route::get('delete-from-cart/{id}',[CartController::class,'cartDelete'])->name('cartDelete');
    
  
    Route::get('aboutus',[GuestController::class,'aboutUs'])->name('aboutus');

    Route::get('shop/{id}',[CLientProductController::class,'shop'])->name('shop');
    Route::get('productdetail/{id}',[CLientProductController::class,'productDetail'])->name('productdetail');


    Route::get('login',[GuestController::class,'showLogin'])->name('showlogin');
    Route::post('regis',[GuestController::class,'register'])->name('register');
    Route::post('login',[GuestController::class,'login'])->name('login');

    Route::get('logout', [ClientController::class, 'logout'])->name('logout');
    Route::middleware('checklogin')->get('account',[ClientController::class,'account'])->name('account');
});

Route::prefix('admin')->name('admin.')->controller(CategoryController::class)->middleware('checklogin')->group(function () {
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
        Route::get('search','search')->name('search');

        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');

        Route::get('edit/{id}','edit')->name('edit');
        Route::post('update/{id}','update')->name('update');

        Route::get('destroy/{id}','destroy')->name('destroy');

        Route::post('upload-file/{id}', 'uploadFile')->name('uploadfile'); 
        Route::get('delete-file/{id}', 'deleteFile')->name('deleteFile'); 

          
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



 



