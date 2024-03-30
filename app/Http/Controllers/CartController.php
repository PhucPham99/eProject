<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart() {
        $cartCollection = Cart::getContent();
       
        return view('clients.page.cart',
        [
            'cartCollection' => $cartCollection
        ]
    );
    }

    public function checkout() {
        return view('clients.page.checkout');
    }

    public function addToCart($id, $quantity) {
        $product = Product::find($id);
        
        Cart::add(array(
            'id' =>$product->id ,
            'name' => $product->name ,
            'price' =>$product->price ,
            'quantity' => $quantity,
            'attributes' => array(
                'image' => $product->image
            )
            
        ));
        return redirect()->route('page.cart');
    }

    public function cartDelete($id) {

    }
}
