<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home() {
        return view('clients.page.home');
    }

    public function showLogin() {
        return view('clients.page.login-register');
    }

    public function account() {
        return view('clients.page.my_account');
    }

    public function productDetail() {
        return view('clients.page.product_detail');
    }

    public function aboutUs() {
        return view('clients.page.about_us');
    }

    public function blog() {
        return view('clients.page.blog');
    }

    public function cart() {
        return view('clients.page.cart');
    }

    public function checkout() {
        return view('clients.page.checkout');
    }

    public function compare() {
        return view('clients.page.compare');
    }

    public function contact() {
        return view('clients.page.contact');
    }

    public function shop() {
        return view('clients.page.shop');
    }

}
