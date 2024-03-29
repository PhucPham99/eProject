@extends('clients.master')
<!-- Mirrored from htmldemo.net/ruiz/ruiz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Mar 2024 13:21:15 GMT -->
@section('title' , 'Shop page')
@section('content')
<div class="main-content-wrap shop-page section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-lg-1 order-2">
                <!-- shop-sidebar-wrap start -->
                <div class="shop-sidebar-wrap">
                    <div class="shop-box-area">

                        <!--sidebar-categores-box start  -->
                        <div class="sidebar-categores-box shop-sidebar mb-30">
                            <h4 class="title">Product categories</h4>
                            <!-- category-sub-menu start -->
                            <div class="category-sub-menu">
                                <ul>
                                    <li class="has-sub"><a href="#">Sports Watches</a>
                                        <ul>
                                            <li><a href="#">Watch men (3)</a></li>
                                            <li><a href="#">Sports Watches (4)</a></li>
                                            <li><a href="#">Watch Butter (4)</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub"><a href="#">Kitchen & Dining</a>
                                        <ul>
                                            <li><a href="#">Watch Woman (2)</a></li>
                                            <li><a href="#">Watch (1)</a></li>
                                            <li><a href="#">Watch Raisins (1)</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub"><a href="#">Casual Watches (12)</a>
                                        <ul>
                                            <li><a href="#">Watch Bag (4)</a></li>
                                            <li><a href="#">Hamburger (4)</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub"><a href="#">Dress Watches (8)</a>
                                        <ul>
                                            <li><a href="#">Digital Watches</a></li>
                                            <li><a href="#">Sheep's meat (8)</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub"><a href="#">Kitchen & Dining (11)</a>
                                        <ul>
                                            <li><a href="#">Digital (8)</a></li>
                                            <li><a href="#">Digital watch (8)</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub"><a href="#">Digital Watches (12)</a>
                                        <ul>
                                            <li><a href="#">Digital Man (8)</a></li>
                                            <li><a href="#">Fusion Watch (8)</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub"><a href="#">Crystal Watches (7)</a>
                                        <ul>
                                            <li><a href="#">Fusion Watch (8)</a></li>
                                            <li><a href="#">Sports's meat (8)</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub"><a href="#">watch series (0)</a>

                                    </li>
                                    <li class="has-sub"><a href="#">watch tnt (11)</a>
                                        <ul>
                                            <li><a href="#">Sports (8)</a></li>
                                            <li><a href="#">Sheep's meat (8)</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- category-sub-menu end -->
                        </div>
                        <!--sidebar-categores-box end  -->

                        <!-- shop-sidebar start -->
                        <div class="shop-sidebar mb-30">
                            <h4 class="title">Filter By Price</h4>
                            <!-- filter-price-content start -->
                            <div class="filter-price-content">
                                <form action="#" method="post">
                                    <div id="price-slider" class="price-slider"></div>
                                    <div class="filter-price-wapper">

                                        <a class="add-to-cart-button" href="#">
                                            <span>FILTER</span>
                                        </a>
                                        <div class="filter-price-cont">

                                            <span>Price:</span>
                                            <div class="input-type">
                                                <input type="text" id="min-price" readonly="" />
                                            </div>
                                            <span>—</span>
                                            <div class="input-type">
                                                <input type="text" id="max-price" readonly="" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- filter-price-content end -->
                        </div>
                        <!-- shop-sidebar end -->

                        <!-- shop-sidebar start -->
                        <div class="shop-sidebar mb-30">
                            <h4 class="title">Filter by Color</h4>

                            <ul class="category-widget-list">
                                <li><a href="#">Red (1)</a></li>
                                <li><a href="#">White (1)</a></li>
                            </ul>

                        </div>
                        <!-- shop-sidebar end -->
                    </div>
                </div>
                <!-- shop-sidebar-wrap end -->
            </div>
            <div class="col-lg-9 order-lg-2 order-1">

                <!-- shop-product-wrapper start -->
                <div class="shop-product-wrapper">
                    <div class="row align-itmes-center">
                        <div class="col">
                            <!-- shop-top-bar start -->
                            <div class="shop-top-bar">
                                <!-- product-view-mode start -->

                                <div class="product-mode">
                                    <!--shop-item-filter-list-->
                                    <ul class="nav shop-item-filter-list" role="tablist">
                                        <li class="active"><a class="active grid-view" data-bs-toggle="tab" href="#grid"><i class="fa fa-th"></i></a></li>
                                        <li><a class="list-view" data-bs-toggle="tab" href="#list"><i class="fa fa-th-list"></i></a></li>
                                    </ul>
                                    <!-- shop-item-filter-list end -->
                                </div>
                                <!-- product-view-mode end -->
                                <!-- product-short start -->
                                <div class="product-short">
                                    <p>Sort By :</p>
                                    <select class="nice-select" name="sortby">
                                        <option value="trending">Relevance</option>
                                        <option value="sales">Name(A - Z)</option>
                                        <option value="sales">Name(Z - A)</option>
                                        <option value="rating">Price(Low > High)</option>
                                        <option value="date">Rating(Lowest)</option>
                                    </select>
                                </div>
                                <!-- product-short end -->
                            </div>
                            <!-- shop-top-bar end -->
                        </div>
                    </div>
                    
                        
                   
                    <!-- shop-products-wrap start -->
                    <div class="shop-products-wrap">
                        <div class="tab-content">
                            <div class="tab-pane active" id="grid">
                                <div class="shop-product-wrap">
                                    @for ($i = 1; $i<=5; $i++)
                                    <div class="row">
                                       
                                        <div class="col-lg-4 col-md-6">
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
                                        <div class="col-lg-4 col-md-6">
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
                                        
                                        <div class="col-lg-4 col-md-6">
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
                                        <div class="col-lg-4 col-md-6">
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
                                        <div class="col-lg-4 col-md-6">
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
                                        <div class="col-lg-4 col-md-6">
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
                                        <div class="col-lg-4 col-md-6">
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
                                        <div class="col-lg-4 col-md-6">
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
                                        <div class="col-lg-4 col-md-6">
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
                                        <div class="col-lg-4 col-md-6">
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
                                        <div class="col-lg-4 col-md-6">
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
                                        <div class="col-lg-4 col-md-6">
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
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop-products-wrap end -->
                    
                    <!-- paginatoin-area start -->
                    <div class="paginatoin-area">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <ul class="pagination-box">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>
                                        <a class="Next" href="#">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- paginatoin-area end -->
                </div>
                <!-- shop-product-wrapper end -->
            </div>
        </div>
    </div>
</div>
@endsection