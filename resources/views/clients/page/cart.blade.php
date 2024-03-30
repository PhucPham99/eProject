@extends('clients.master')
<!-- Mirrored from htmldemo.net/ruiz/ruiz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Mar 2024 13:21:15 GMT -->
@section('title' , 'Cart page')
@section('content')
        
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
                                        @foreach ($cartCollection as $item )                                        
                                        <tr>
                                            <td class="plantmore-product-thumbnail img-fluid"><a href="#"><img src="{{asset ('uploads/'.$item->attributes->image) }}" width="100" alt=""></a></td>
                                            <td class="plantmore-product-name"><a href="#">{{$item->name}}</a></td>
                                            <td class="plantmore-product-price"><span class="amount">{{number_format($item->price,0,'','.')}}VNĐ</span></td>
                                            <td class="plantmore-product-quantity">
                                                <input value="{{$item->quantity}}" type="number" >
                                            </td>                                           
                                            <td class="product-subtotal"><span class="amount">{{number_format($item->price * $item->quantity,0,'','.')}}VNĐ</span></td>
                                            <td class="plantmore-product-remove"><a href="{{route('page.cartDelete',['id' => $item->id])}}"><i class="fa fa-times"></i></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">

                                <div class="col-md-4 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>
                                        <ul>
                                            <li>Subtotal <span>{{number_format(Cart::getTotal())}}</span></li>
                                            <li>Total <span>{{number_format(Cart::getTotal())}}</span></li>
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