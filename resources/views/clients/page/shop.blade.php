@extends('clients.master')
<!-- Mirrored from htmldemo.net/ruiz/ruiz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Mar 2024 13:21:15 GMT -->
@section('title' , $categories->name)
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
                                    @foreach ($category_list as $category )
                                    <li style="margin-bottom: 20px;">
                                        <a href="{{route('page.shop',['id' => $category->id])}}">{{$category->name}}&nbsp;&nbsp;<span style="padding-left: 10px;">{{count($category->product)}}</span></a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- category-sub-menu end -->
                        </div>
                        <!--sidebar-categores-box end  -->
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
                                        
                                    </ul>
                                    <!-- shop-item-filter-list end -->
                                </div>
                                <!-- product-view-mode end -->
                            </div>
                            <!-- shop-top-bar end -->
                        </div>
                    </div>
                    
                        
                   
                    <!-- shop-products-wrap start -->
                    <div class="shop-products-wrap">
                        <div class="tab-content">
                            <div class="tab-pane active" id="grid">
                                <div class="shop-product-wrap">
                                    <div class="row">
                                        @foreach ($products as $item )
                                        <div class="col-lg-4 col-md-6 ">
                                            <!-- single-product-area start -->
                                            
                                            <div class="single-product-area mt-30 ">
                                                <div class="product-thumb img-fluid">
                                                    <a href="product-details.html">
                                                        <img class="primary-image " src="{{asset('uploads/'.$item->image) }}" width="100%" height="200" alt="">
                                                    </a>
                                                    <div class="label-product label_new">New</div>
                                                    <div class="action-links">
                                                        <a href="{{route('page.addtocart', ['id' => $item->id, 'quantity' => 1])}}" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                                        <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                                        <a href="{{route('page.productdetail',  $item->id)}}"><i class="icon-magnifier icons"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-caption">
                                                    <h4 class="product-name"><a href="product-details.html">{{$item->name}}</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">{{number_format($item->price,0 , "", ",")}}VNĐ</span>
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
                    </div>
                    <!-- shop-products-wrap end -->
                    
                    <!-- paginatoin-area start -->
                   {!! $products->links('clients.partial.pagination') !!}
                    <!-- paginatoin-area end -->
                </div>
                <!-- shop-product-wrapper end -->
            </div>
        </div>
    </div>
</div>


@endsection