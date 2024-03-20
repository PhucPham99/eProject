@extends('clients.master')
<!-- Mirrored from htmldemo.net/ruiz/ruiz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Mar 2024 13:21:15 GMT -->
@section('title' , 'Home page')
@section('content')
<div class="main-wrapper">
        <aside class="off-canvas-wrapper">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="btn-close-off-canvas">
                    <i class="fa fa-times"></i>
                </div>

                <div class="off-canvas-inner">

                    <div class="search-box-offcanvas">
                        <form>
                            <input type="text" placeholder="Search product...">
                            <button class="search-btn"><i class="icon-magnifier"></i></button>
                        </form>
                    </div>
                    
                    <div class="header-top-settings offcanvas-curreny-lang-support">
                        <h5>My Account</h5>
                        <ul class="nav align-items-center">
                            <li class="language">English <i class="fa fa-angle-down"></i>
                                <ul class="dropdown-list">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                </ul>
                            </li>
                            <li class="curreny-wrap">Currency <i class="fa fa-angle-down"></i>
                                <ul class="dropdown-list curreny-list">
                                    <li><a href="#">$ USD</a></li>
                                    <li><a href="#"> € EURO</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <!-- offcanvas widget area start -->
                    <div class="offcanvas-widget-area">
                        <div class="top-info-wrap text-left text-black">
                            <h5>My Account</h5>
                            <ul class="offcanvas-account-container">
                                <li><a href="my-account.html">My account</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- offcanvas widget area end -->
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->
        
    </header>
    <!--  Header Start -->
    
    <!-- Hero Section Start -->
    <div class="hero-slider hero-slider-one">

        <!-- Single Slide Start -->
        <div class="single-slide" style="background-image: url({{ ('client/assets/images/slider/slide-bg-2.jpg') }})">
            <!-- Hero Content One Start -->
            <div class="hero-content-one container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="slider-content-text text-left">
                            <h5>Exclusive Offer -20% Off This Week</h5>
                            <h1>H-Vault Classico</h1>
                            <p>H-Vault Watches Are A Lot Like Classic American Muscle Cars - Expect For The American Part That Is. </p>
                            <p>Starting At <strong>$1.499.00</strong></p>
                            <div class="slide-btn-group">
                                <a href="shop.html" class="btn btn-bordered btn-style-1">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Content One End -->
        </div>
        <!-- Single Slide End -->
        
        <!-- Single Slide Start -->
        <div class="single-slide" style="background-image: url({{ ('client/assets/images/slider/slide-bg-1.jpg') }})">
            <!-- Hero Content One Start -->
            <div class="hero-content-one container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="slider-content-text text-left">
                            <h5>Exclusive Offer -20% Off This Week</h5>
                            <h1>H-Vault Classico</h1>
                            <p>H-Vault Watches Are A Lot Like Classic American Muscle Cars - Expect For The American Part That Is. </p>
                            <p>Starting At <strong>$1.499.00</strong></p>
                            <div class="slide-btn-group">
                                <a href="shop.html" class="btn btn-bordered btn-style-1">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Content One End -->
        </div>
        <!-- Single Slide End -->

    </div>
    <!-- Hero Section End -->
    
    <!-- Banner Area Start -->
    <div class="banner-area section-pt">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="{{ ('client/assets/images/banner/banner-01.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6  col-md-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="{{ ('client/assets/images/banner/banner-02.jpg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
   
    <!-- Product Area Start -->
    
    <div class="product-area section-pb section-pt-30">
        <div class="container">
           
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4>Best seller products</h4>
                    </div>
                </div>
            </div>
           
            <div class="row product-active-lg-4">
                <div class="col-lg-12">
                    <!-- single-product-area start -->
                    <div class="single-product-area mt-30">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img class="primary-image" src="{{ ('client/assets/images/product/product-02.png') }}" alt="">
                            </a>
                            <div class="label-product label_new">New</div>
                            <div class="action-links">
                                <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                <a href="{{route('page.productdetail')}}" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                            </div>
                            <ul class="watch-color">
                                <li class="twilight"><span></span></li>
                                <li class="pigeon"><span></span></li>
                                <li  class="portage"><span></span></li>
                            </ul>
                        </div>
                        <div class="product-caption">
                            <h4 class="product-name"><a href="product-details.html">Simple Product 002</a></h4>
                            <div class="price-box">
                                <span class="new-price">$49.00</span>
                                <span class="old-price">$90.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-area end -->
                </div>
                <div class="col-lg-12">
                    <!-- single-product-area start -->
                    <div class="single-product-area mt-30">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img class="primary-image" src="{{ ('client/assets/images/product/product-03.png') }}" alt="">
                            </a>
                            
                            <div class="action-links">
                                <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                            </div>
                            <ul class="watch-color">
                                <li class="twilight"><span></span></li>
                                <li class="pigeon"><span></span></li>
                            </ul>
                        </div>
                        <div class="product-caption">
                            <h4 class="product-name"><a href="product-details.html">Simple Product 003</a></h4>
                            <div class="price-box">
                                <span class="new-price">$55.00</span>
                                <span class="old-price">$76.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-area end -->
                </div>
                <div class="col-lg-12">
                    <!-- single-product-area start -->
                    <div class="single-product-area mt-30">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img class="primary-image" src="{{ ('client/assets/images/product/product-04.png') }}" alt="">
                            </a>
                            <div class="label-product label_new">New</div>
                            <div class="action-links">
                                <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                            </div>
                            <ul class="watch-color">
                                <li class="twilight"><span></span></li>
                                <li  class="portage"><span></span></li>
                                <li class="pigeon"><span></span></li>
                            </ul>
                        </div>
                        <div class="product-caption">
                            <h4 class="product-name"><a href="product-details.html">Simple Product 004</a></h4>
                            <div class="price-box">
                                <span class="new-price">$64.00</span>
                                <span class="old-price">$72.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-area end -->
                </div>
                <div class="col-lg-12">
                    <!-- single-product-area start -->
                    <div class="single-product-area mt-30">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img class="primary-image" src="{{ ('client/assets/images/product/product-05.png') }}" alt="">
                            </a>
                            <div class="label-product label_new">New</div>
                            <div class="action-links">
                                <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                            </div>
                            <ul class="watch-color">
                                <li class="twilight"><span></span></li>
                                <li  class="portage"><span></span></li>
                                <li class="pigeon"><span></span></li>
                            </ul>
                        </div>
                        <div class="product-caption">
                            <h4 class="product-name"><a href="product-details.html">Simple Product 005</a></h4>
                            <div class="price-box">
                                <span class="new-price">$44.00</span>
                                <span class="old-price">$49.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-area end -->
                </div>
                <div class="col-lg-12">
                    <!-- single-product-area start -->
                    <div class="single-product-area mt-30">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img class="primary-image" src="{{ ('client/assets/images/product/product-01.png') }}" alt="">
                            </a>
                            <div class="label-product label_new">New</div>
                            <div class="action-links">
                                <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                            </div>
                            <ul class="watch-color">
                                <li class="twilight"><span></span></li>
                                <li  class="portage"><span></span></li>
                                <li class="pigeon"><span></span></li>
                            </ul>
                        </div>
                        <div class="product-caption">
                            <h4 class="product-name"><a href="product-details.html">Simple Product 001</a></h4>
                            <div class="price-box">
                                <span class="new-price">$42.00</span>
                                <span class="old-price">$49.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End -->
    
    <!-- Banner Area Start -->
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="{{ ('client/assets/images/banner/banner-03.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6  col-md-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="{{ ('client/assets/images/banner/banner-04.jpg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    
    
    <!-- Product Area Start -->
    <div class="product-area section-pb section-pt-30">
        <div class="container">
           
            <div class="row">
                <div class="col-12 text-center">
                    <ul class="nav product-tab-menu" role="tablist">
                        <li class="product-tab-item nav-item active">
                            <a class="product-tab__link active" id="nav-featured-tab" data-bs-toggle="tab" href="#nav-featured" role="tab" aria-selected="true">Featured</a>
                        </li>
                        <li class="product-tab__item nav-item">
                            <a class="product-tab__link" id="nav-new-tab" data-bs-toggle="tab" href="#nav-new" role="tab" aria-selected="false">New Arrivals</a>
                        </li>
                        <li class="product-tab__item nav-item">
                            <a class="product-tab__link" id="nav-bestseller-tab" data-bs-toggle="tab" href="#nav-bestseller" role="tab" aria-selected="false">Bestseller</a>
                        </li>
                        <li class="product-tab__item nav-item">
                            <a class="product-tab__link" id="nav-onsale-tab" data-bs-toggle="tab" href="#nav-onsale" role="tab" aria-selected="false">On Sale</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            
            <div class="tab-content product-tab__content" id="product-tabContent">
                <div class="tab-pane fade show active" id="nav-featured" role="tabpanel">
                    <div class="product-carousel-group">
                       
                        <div class="row product-active-row-4">
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-20.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 001</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$44.00</span>
                                            <span class="old-price">$49.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-02.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 005</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-06.png') }}" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 004</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$42.00</span>
                                            <span class="old-price">$45.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-07.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 004</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-08.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 008</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$75.00</span>
                                            <span class="old-price">$79.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-09.png') }}" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 009</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$75.00</span>
                                            <span class="old-price">$79.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-10.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 010</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$65.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-11.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 011</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-12.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 012</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-13.png') }}" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 013</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-14.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 013</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-15.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 015</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="tab-pane fade" id="nav-new" role="tabpanel">
                    <div class="product-carousel-group">
                       
                        <div class="row product-active-row-4">
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-10.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 001</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$44.00</span>
                                            <span class="old-price">$49.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-14.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 005</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-15.png') }}" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 004</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$42.00</span>
                                            <span class="old-price">$45.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-17.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 004</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-08.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 008</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$75.00</span>
                                            <span class="old-price">$79.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-09.png') }}" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 009</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$75.00</span>
                                            <span class="old-price">$79.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-10.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 010</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$65.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-11.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 011</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-12.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 012</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-13.png') }}" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 013</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-14.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 013</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-15.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 015</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-bestseller" role="tabpanel">
                    <div class="product-carousel-group">
                       
                        <div class="row product-active-row-4">
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-11.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 001</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$44.00</span>
                                            <span class="old-price">$49.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-12.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 005</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-13.png') }}" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 004</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$42.00</span>
                                            <span class="old-price">$45.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-07.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 004</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-08.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 008</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$75.00</span>
                                            <span class="old-price">$79.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-09.png') }}" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 009</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$75.00</span>
                                            <span class="old-price">$79.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-10.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 010</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$65.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-11.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 011</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-12.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 012</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-13.png') }}" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 013</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-14.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 013</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-15.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 015</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-onsale" role="tabpanel">
                    <div class="product-carousel-group">
                       
                        <div class="row product-active-row-4">
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-20.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 001</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$44.00</span>
                                            <span class="old-price">$49.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-19.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 005</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-18.png') }}" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 004</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$42.00</span>
                                            <span class="old-price">$45.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-17.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 004</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-03.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 008</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$75.00</span>
                                            <span class="old-price">$79.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-09.png') }}" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 009</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$75.00</span>
                                            <span class="old-price">$79.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-10.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 010</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$65.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-11.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 011</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-12.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 012</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-13.png') }}" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 013</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-14.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 013</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ ('client/assets/images/product/product-15.png') }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 015</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Product Area End -->
    
    <!-- letast blog area Start -->
    <div class="letast-blog-area section-pb">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-4">
                    <div class="singel-latest-blog">
                        <div class="aritcles-content">
                            <div class="author-name">
                                post by: <a href="#"> Author Name</a> - 30 Oct 2019
                            </div>
                            <h4><a href="blog-details.html" class="articles-name">Ruiz Watch is one of the web's most visited watch sites and the world's</a></h4>
                        </div>
                        <div class="articles-image">
                            <a href="blog-details.assetshtml">
                                <img src="{{ ('client/assets/images/blog/blog-01.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="singel-latest-blog">
                        <div class="aritcles-content">
                            <div class="author-name">
                                post by: <a href="#"> Author Name</a> - 20 Oct 2019
                            </div>
                            <h4><a href="blog-details.html" class="articles-name">Ruiz Watch reviews and most popular watch & timepiece blog for serious </a></h4>
                        </div>
                        <div class="articles-image">
                            <a href="blog-details.html">
                                <img src="{{ ('client/assets/images/blog/blog-02.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="singel-latest-blog">
                        <div class="aritcles-content">
                            <div class="author-name">
                                post by: <a href="#"> Author Name</a> - 13 Oct 2019
                            </div>
                            <a href="blog-details.html" class="articles-name">Connected to the World: Introducing the G-Shock MTG-B1000-1A</a>
                        </div>
                        <div class="articles-image">
                            <a href="blog-details.html">
                                <img src="{{ ('client/assets/images/blog/blog-03.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- letast blog area End -->
    
    <!-- our-brand-area start -->
    <div class="our-brand-area section-pb">
        <div class="container">
            <div class="row our-brand-active">
                <div class="brand-single-item">
                    <a href="#"><img src="{{ ('client/assets/images/brand/brand-01.png') }}" alt=""></a>
                </div>
                <div class="brand-single-item">
                    <a href="#"><img src="{{ ('client/assets/images/brand/brand-01.png') }}" alt=""></a>
                </div>
                <div class="brand-single-item">
                    <a href="#"><img src="{{ ('client/assets/images/brand/brand-01.png') }}" alt=""></a>
                </div>
                <div class="brand-single-item">
                    <a href="#"><img src="{{ ('client/assets/images/brand/brand-01.png') }}" alt=""></a>
                </div>
                <div class="brand-single-item">
                    <a href="#"><img src="{{ ('client/assets/images/brand/brand-01.png') }}" alt=""></a>
                </div>
                <div class="brand-single-item">
                    <a href="#"><img src="{{ ('client/assets/images/brand/brand-01.png') }}" alt=""></a>
                </div>
                <div class="brand-single-item">
                    <a href="#"><img src="{{ ('client/assets/images/brand/brand-01.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- our-brand-area end -->
   
    <div class="newletter-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="newletter-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-12">
                                <div class="newsletter-title mb-30">
                                    <h3>Join Our <br><span>Newsletter Now</span></h3>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-7">
                                <div class="newsletter-footer mb-30">
                                    <input type="text" placeholder="Your email address...">
                                    <div class="subscribe-button">
                                        <button class="subscribe-btn">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade modal-wrapper" id="exampleModalCenter" >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-inner-area">
                        <div class="row gx-3 product-details-inner">
                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <!-- Product Details Left -->
                                <div class="product-large-slider">
                                    <div class="pro-large-img">
                                        <img src="{{ ('client/assets/images/product/product-01.png') }}" alt="product-details" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="{{ ('client/assets/images/product/product-02.png') }}" alt="product-details" />
                                    </div>
                                    <div class="pro-large-img ">
                                        <img src="{{ ('client/assets/images/product/product-03.png') }}" alt="product-details" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="{{ ('client/assets/images/product/product-04.png') }}" alt="product-details" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="{{ ('client/assets/images/product/product-05.png') }}" alt="product-details" />
                                    </div>

                                </div>
                                <div class="product-nav">
                                    <div class="pro-nav-thumb">
                                        <img src="{{ ('client/assets/images/product/product-01.png') }}" alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{ ('client/assets/images/product/product-02.png') }}" alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{ ('client/assets/images/product/product-03.png') }}" alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{ ('client/assets/images/product/product-04.png') }}" alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{ ('client/assets/images/product/product-05.png') }}" alt="product-details" />
                                    </div>
                                </div>
                                <!--// Product Details Left -->
                            </div>

                            <div class="col-lg-7 col-md-6 col-sm-6">
                                <div class="product-details-view-content">
                                    <div class="product-info">
                                        <h3>Single product One</h3>
                                        <div class="product-rating d-flex">
                                            <ul class="d-flex">
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                            </ul>
                                            <a href="#reviews">(<span class="count">1</span> customer review)</a>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$70.00</span>
                                            <span class="old-price">$78.00</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor.</p>

                                        <div class="single-add-to-cart">
                                            <form action="#" class="cart-quantity d-flex">
                                                <div class="quantity">
                                                    <div class="cart-plus-minus">
                                                        <input type="number" class="input-text" name="quantity" value="1" title="Qty">
                                                    </div>
                                                </div>
                                                <button class="add-to-cart" type="submit">Add To Cart</button>
                                            </form>
                                        </div>
                                        <ul class="single-add-actions">
                                            <li class="add-to-wishlist">
                                                <a href="wishlist.html" class="add_to_wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                            </li>
                                        </ul>
                                        <ul class="stock-cont">
                                            <li class="product-stock-status">Categories: <a href="#">Watchs,</a> <a href="#">Man Watch</a></li>
                                            <li class="product-stock-status">Tag: <a href="#">Man</a></li>
                                        </ul>
                                        <div class="share-product-socail-area">
                                            <p>Share this product</p>
                                            <ul class="single-product-share">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
@endsection




