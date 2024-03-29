@extends('clients.master')
<!-- Mirrored from htmldemo.net/ruiz/ruiz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Mar 2024 13:21:15 GMT -->
@section('title' , 'Compare page')
@section('content')
<div class="compare-table table-responsive">
    <table class="table mb-0">
        <tbody>
            <tr>
                <td class="first-column">Product</td>
                <td class="product-image-title">
                    <a href="#" class="image"><img src="{{ asset('client/assets/images/product/product-02.png') }}" alt="Compare Product"></a>
                    <a href="#" class="category">Furniture</a>
                    <a href="#" class="title">Rinosin title</a>
                </td>
                <td class="product-image-title">
                    <a href="#" class="image"><img src="{{ asset('client/assets/images/product/product-04.png') }}" alt="Compare Product"></a>
                    <a href="#" class="category">Furniture</a>
                    <a href="#" class="title">Macro title</a>
                </td>
                <td class="product-image-title">
                    <a href="#" class="image"><img src="{{ asset('client/assets/images/product/product-03.png') }}" alt="Compare Product"></a>
                    <a href="#" class="category">Furniture</a>
                    <a href="#" class="title">Oakley title</a>
                </td>
            </tr>
            <tr>
                <td class="first-column">Description</td>
                <td class="pro-desc">
                    <p>Eye glasses are very important for thos whos have some difficult in their eye to see every hing clearly and perfectly</p>
                </td>
                <td class="pro-desc">
                    <p>Eye glasses are very important for thos whos have some difficult in their eye to see every hing clearly and perfectly</p>
                </td>
                <td class="pro-desc">
                    <p>Eye glasses are very important for thos whos have some difficult in their eye to see every hing clearly and perfectly</p>
                </td>
            </tr>
            <tr>
                <td class="first-column">Price</td>
                <td class="pro-price">$295</td>
                <td class="pro-price">$275</td>
                <td class="pro-price">$395</td>
            </tr>
            <tr>
                <td class="first-column">Color</td>
                <td class="pro-color">Black</td>
                <td class="pro-color">Black</td>
                <td class="pro-color">Black</td>
            </tr>
            <tr>
                <td class="first-column">Stock</td>
                <td class="pro-stock">In Stock</td>
                <td class="pro-stock">In Stock</td>
                <td class="pro-stock">In Stock</td>
            </tr>
            <tr>
                <td class="first-column">Add to cart</td>
                <td class="pro-addtocart"><a href="#" class="add-to-cart" tabindex="0"><span>ADD TO CART</span></a></td>
                <td class="pro-addtocart"><a href="#" class="add-to-cart" tabindex="0"><span>ADD TO CART</span></a></td>
                <td class="pro-addtocart"><a href="#" class="add-to-cart" tabindex="0"><span>ADD TO CART</span></a></td>
            </tr>
            <tr>
                <td class="first-column">Delete</td>
                <td class="pro-remove"><button><i class="fa fa-trash"></i></button></td>
                <td class="pro-remove"><button><i class="fa fa-trash"></i></button></td>
                <td class="pro-remove"><button><i class="fa fa-trash"></i></button></td>
            </tr>
            <tr>
                <td class="first-column">Rating</td>
                <td class="pro-ratting">
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                </td>
                <td class="pro-ratting">
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                </td>
                <td class="pro-ratting">
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                    <i class="icon-star"></i>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection