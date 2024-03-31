@extends('clients.master')
<!-- Mirrored from htmldemo.net/ruiz/ruiz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Mar 2024 13:21:15 GMT -->
@section('title' , 'Product detail page')
@section('content')
            
        <!-- breadcrumb-area start -->
        <!-- breadcrumb-area end -->

        <!-- main-content-wrap start -->
<div class="main-content-wrap shop-page section-ptb">
    <div class="container">
        <div class="row product-details-inner">
            <div class="col-lg-5 col-md-6">
                <!-- Product Details Left -->
                <div class="product-large-slider">
                    @foreach ($products->product_images as $pi)
                    <div class="">
                        <img src="{{asset('uploads/'.$pi->images)}}" alt="product-details" width="400" />
                        <a href="{{asset('uploads/'.$pi->images)}}" data-fancybox="images"><i class="fa fa-search"></i></a>
                    </div>
                    @endforeach
                </div>
                <div class="product-nav">
                    @for ($i = 1 ; $i >=3 ;$i++)
                    <div class="pro-nav-thumb">
                        <img src="assets/images/product/product-01.png" alt="product-details" />
                    </div>
                    @endfor
                </div>
                <!--// Product Details Left -->
            </div>

            <div class="col-lg-7 col-md-6">
                <div class="product-details-view-content">
                    <div class="product-info">
                        <h3>{{$products->name}}</h3>
                        <div class="price-box">
                            <span class="new-price">{{number_format($products->price,0,'',',')}}VNĐ</span>
                        </div>
                        <p>{!!$products->description!!}</p>

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
                            {{-- <li class="add-to-wishlist">
                                <a href="wishlist.html" class="add_to_wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                            </li> --}}
                            <li class="add-to-compare">
                                <div class="compare-button"><a href="compare.html"><i class="icon-refresh"></i> Compare</a></div>
                            </li>
                        </ul>
                        <ul class="stock-cont">
                            <li class="product-stock-status">Categories: <a href="#">{{$products->category->name}}</a> <a href="#">{{$products->name}}</a></li>
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

        {{-- <div class="product-description-area section-pt">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-details-tab">
                        <ul role="tablist" class="nav">
                            <li class="active" role="presentation">
                                <a data-bs-toggle="tab" role="tab" href="#description" class="active">Description</a>
                            </li>
                            <li role="presentation">
                                <a data-bs-toggle="tab" role="tab" href="#reviews">Reviews</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product_details_tab_content tab-content">
                        <!-- Start Single Content -->
                        <div class="product_tab_content tab-pane active" id="description" role="tabpanel">
                            <div class="product_description_wrap  mt-30">
                                <div class="product_desc mb-30">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>

                                    <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.</p>
                                </div>

                            </div>
                        </div>
                        <!-- End Single Content -->
                        <!-- Start Single Content -->
                        <div class="product_tab_content tab-pane" id="reviews" role="tabpanel">
                            <div class="review_address_inner mt-30">
                                <!-- Start Single Review -->
                                <div class="pro_review">
                                    <div class="review_thumb">
                                        <img alt="review images" src="assets/images/other/reviewer-60x60.jpg">
                                    </div>
                                    <div class="review_details">
                                        <div class="review_info mb-10">
                                            <ul class="product-rating d-flex mb-10">
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                            </ul>
                                            <h5>Admin - <span> November 19, 2019</span></h5>

                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in viverra ex, vitae vestibulum arcu. Duis sollicitudin metus sed lorem commodo, eu dapibus libero interdum. Morbi convallis viverra erat, et aliquet orci congue vel. Integer in odio enim. Pellentesque in dignissim leo. Vivamus varius ex sit amet quam tincidunt iaculis.</p>
                                    </div>
                                </div>
                                <!-- End Single Review -->
                            </div>
                            <!-- Start RAting Area -->
                            <div class="rating_wrap mt-50">
                                <h5 class="rating-title-1">Add a review </h5>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <h6 class="rating-title-2">Your Rating</h6>
                                <div class="rating_list">
                                    <div class="review_info mb-10">
                                        <ul class="product-rating d-flex mb-10">
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                            <li><span class="icon-star"></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End RAting Area -->
                            <div class="comments-area comments-reply-area">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="#" class="comment-form-area">
                                            <div class="row comment-input">
                                                <div class="col-md-6 comment-form-author mt-15">
                                                    <label>Name <span class="required">*</span></label>
                                                    <input type="text" required="required" name="Name">
                                                </div>
                                                <div class="col-md-6 comment-form-email mt-15">
                                                    <label>Email <span class="required">*</span></label>
                                                    <input type="text" required="required" name="email">
                                                </div>
                                            </div>
                                            <div class="comment-form-comment mt-15">
                                                <label>Comment</label>
                                                <textarea class="comment-notes" required="required"></textarea>
                                            </div>
                                            <div class="comment-form-submit mt-15">
                                                <input type="submit" value="Submit" class="comment-submit">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Content -->
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="related-product-area section-pt">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3> Related Product</h3>
                    </div>
                </div>
            </div>
            <div class="row product-active-lg-4 img-fluid">
                @foreach ($product_related as $related)
                <div class="col-lg-12 ">
                    <!-- single-product-area start -->
                    <div class="single-product-area mt-30  ">
                        <div class="product-thumb ">
                            <a href="product-details.html">
                                <img class="primary-image  " src="{{asset('uploads/'.$related->image)}}" width="100%" height="190" alt="" >
                            </a>
                            <div class="label-product label_new">New</div>
                            <div class="action-links">
                                <a href="{{route('page.addtocart',[ 'id' => $related->id, 'quantity' => 1])}}" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                <a href="{{route('page.productdetail', $products->category->id)}}" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                            </div>
                        </div>
                        <div class="product-caption">
                            <h4 class="product-name"><a href="product-details.html">{{$related->name}}</a></h4>
                            <div class="price-box">
                                <span class="new-price">{{number_format($related->price,0,'',',')}}VNĐ</span>
                                
                            </div>
                        </div>
                    </div>
                    <!-- single-product-area end -->
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
        <!-- main-content-wrap end -->
@endsection