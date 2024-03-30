<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CLientProductController extends Controller
{
    public function shop($id) {
       
        $categories = Category::find($id);
        
        $products = Product::with('category')->where('category_id', $id)->paginate(6);
        
        $category_list = Category::with('product')->whereBetween('id',[2,4])->get();

        
        return view('clients.page.shop',compact('products'), 
        [
            'id' => $id,
            'products' => $products,
            'categories' => $categories,
            'category_list' => $category_list
            
        ]);
    }

    public function productDetail($id) {
       
        $products = Product::with('category','product_images')->where('id', $id)->first();


        $product_related = Product::with('category')
        ->where('category_id', $products->category->id)
        ->where('id', '!=', $products->id)  
        ->paginate(4);     

        return view('clients.page.product_detail',
        [
            'products' => $products,
            'product_related' =>$product_related
        ]   
    );
    }


  
}
