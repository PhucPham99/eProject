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
                                <li><a href="{{route('page.account')}}">My account</a></li>
                                <li><a href="{{route('page.cart')}}">Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="{{route('page.checkout')}}">Checkout</a></li>
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
                                <a href="" class="btn btn-bordered btn-style-1">Shop Now</a>
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
                @foreach ($products as $item )
                <div class="col-lg-12">
                    <!-- single-product-area start -->
                    <div class="single-product-area mt-30 img-fluid">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img class="primary-image " src="{{asset ('uploads/'.$item->image) }}" alt="" width="100%" height="170px">
                            </a>
                            <div class="label-product label_new">New</div>
                            <div class="action-links">
                                <a href="{{route('page.addtocart',['id'=> $item->id, 'quantity' => 1])}}" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                <a href="#" class="quick-view" title="Quick View" ><i class="icon-magnifier icons"></i></a>
                            </div>
                        </div>
                        <div class="product-caption">
                            <h4 class="product-name"><a href="product-details.html">{{$item->name}}</a></h4>
                            <div class="price-box">
                                
                                <span class="new-price">{{number_format($item->price, 0, "",".")}}VNĐ</span>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-area end -->
                </div>
                @endforeach
                
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
                    </ul>
                </div>
            </div>
            
            
            <div class="tab-content product-tab__content" id="product-tabContent">
                <div class="tab-pane fade show active" id="nav-featured" role="tabpanel">
                    <div class="product-carousel-group">
                       
                        <div class="row product-active-row-4">
                            @foreach ($products as $item )
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30 " class="img-fluid">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{ asset('uploads/'.$item->image) }}" alt="" width="100%" height="200">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="{{route('page.addtocart',['id'=> $item->id, 'quantity' => 1])}}" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="{{route('page.productdetail', $item->id)}}" class="quick-view" title="Quick View" ><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name">{{$item->name}}<a href="product-details.html"></a></h4>
                                        <div class="price-box">
                                            <span class="new-price">{{number_format($item->price, 0 , "",".")}}VND</span> 
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            @endforeach
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
                                            <img class="primary-image" src="{{ asset('uploads/'.$item->image) }}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="{{route('page.addtocart',['id'=> $item->id, 'quantity' => 1])}}" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="{{route('page.productdetail', $item->id)}}" class="quick-view" title="Quick View" data-bs-toggle="modal" ><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">{{$item->name}}</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">{{number_format($item->price, 0 , "",".")}}VND</span>
                                            
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
    <div class="letast-blog-area section-pb d-flex ">   
        <div class="container">
            <div class="row"> 
                @foreach ($products as $product )
                <div class="col-sm">
                    <div class="singel-latest-blog">
                            <div class="aritcles-content">
                                <div class="author-name">
                                    post by: <a href="#">{{$product->user->fullname}}</a> - 30 Oct 2019
                                </div>
                                <h4><a href="blog-details.html" class="articles-name"></a>{!!$product->description!!}</h4>
                            </div>
                            <div class="articles-image img-fluid">
                                <a href="blog-details.assetshtml">
                                    <img src="{{asset('uploads/'.$product->image)}}" width="100%"  height="100">
                                </a>
                            </div>
                    </div>
                </div>
                @endforeach 
            </div>
        </div>
    </div>
    <!-- letast blog area End -->
    
    <!-- our-brand-area start -->
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
    {{-- <div class="modal-dialog modal-dialog-centered" role="document">
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
                                    <img src="{{ asset('client/assets/images/product/product-01.png')}}" alt="product-details" />
                                </div>
                                <div class="pro-large-img">
                                    <img src="{{ asset('client/assets/images/product/product-02.png')}}" alt="product-details" />
                                </div>
                                <div class="pro-large-img ">
                                    <img src="{{ asset('client/assets/images/product/product-03.png')}}" alt="product-details" />
                                </div>
                                <div class="pro-large-img">
                                    <img src="{{ asset('client/assets/images/product/product-04.png')}}" alt="product-details" />
                                </div>
                                <div class="pro-large-img">
                                    <img src="{{ asset('client/assets/images/product/product-05.png')}}" alt="product-details" />
                                </div>

                            </div>
                            <div class="product-nav">
                                <div class="pro-nav-thumb">
                                    <img src="{{ asset('client/assets/images/product/product-01.png')}}" alt="product-details" />
                                </div>
                                <div class="pro-nav-thumb">
                                    <img src="{{ asset('client/assets/images/product/product-02.png')}}" alt="product-details" />
                                </div>
                                <div class="pro-nav-thumb">
                                    <img src="{{ asset('client/assets/images/product/product-03.png')}}" alt="product-details" />
                                </div>
                                <div class="pro-nav-thumb">
                                    <img src="{{ asset('client/assets/images/product/product-04.png')}}" alt="product-details" />
                                </div>
                                <div class="pro-nav-thumb">
                                    <img src="{{ asset('client/assets/images/product/product-05.png')}}" alt="product-details" />
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
    </div>       --}}

@endsection




