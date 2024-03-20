@extends('clients.master')
<!-- Mirrored from htmldemo.net/ruiz/ruiz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Mar 2024 13:21:15 GMT -->
@section('title' , 'Cart page')
@section('content')
           <!-- breadcrumb-area start -->
           <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="{{route('page.home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Cart Page</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        
        <!-- main-content-wrap start -->
        <div class="main-content-wrap section-ptb cart-page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="#" class="cart-table">
                            @csrf
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="plantmore-product-thumbnail">Images</th>
                                            <th class="cart-product-name">Product</th>
                                            <th class="plantmore-product-price">Unit Price</th>
                                            <th class="plantmore-product-quantity">Quantity</th>
                                            <th class="plantmore-product-subtotal">Total</th>
                                            <th class="plantmore-product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i=1 ; $i<=8; $i++)
                                        <tr>
                                            <td class="plantmore-product-thumbnail"><a href="#"><img src="{{ ('client/assets/images/other/01.jpg') }}" alt=""></a></td>
                                            <td class="plantmore-product-name"><a href="#">Compete Track Tote</a></td>
                                            <td class="plantmore-product-price"><span class="amount">$70.00</span></td>
                                            <td class="plantmore-product-quantity">
                                                <input value="1" type="number">
                                            </td>
                                            <td class="product-subtotal"><span class="amount">$70.00</span></td>
                                            <td class="plantmore-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                        </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="coupon-all">

                                        <div class="coupon2">
                                            <input class="submit" name="update_cart" value="Update cart" type="submit">
                                            <a href="{{route('page.shop')}}" class=" continue-btn">Continue Shopping</a>
                                        </div>

                                        <div class="coupon">
                                            <h3>Coupon</h3>
                                            <p>Enter your coupon code if you have one.</p>
                                            <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                            <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>
                                        <ul>
                                            <li>Subtotal <span>$170.00</span></li>
                                            <li>Total <span>$170.00</span></li>
                                        </ul>
                                        <a href="{{route('page.checkout')}}" class="proceed-checkout-btn">Proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-content-wrap end -->
@endsection