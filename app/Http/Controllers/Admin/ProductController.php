<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Http\Requests\Admin\Product\StoreRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Console\StorageUnlinkCommand;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->orderBy('created_at', "DESC")->get();
        return view('admin.modules.product.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.modules.product.create',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $products = new Product();

        $file = $request->file('image');
        $fileName = time(). "_" . $file->getClientOriginalName();
        $products->name = $request->name;
        $products->price = $request->price;
        $products->description = $request->description;
        $products->content = $request->content;
        $products->category_id = $request->category_id;
        $products->status = $request->status;
        $products->featured = $request->featured;
        $products->image = $fileName;

        $products->user_id = 1;

        $products->save();
        $file->move(public_path('uploads/'), $fileName);

        return redirect()->route('admin.product.index')->with('success', 'Create product successfully');
 
        




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::get();
        $product = Product::find($id);

        if($product == null) {
            abort(404);
        }
        return view('admin.modules.product.edit',
        [   
            'id' => $id,
            'categories' => $categories,
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $products = Product::find($id);
        if($products == null) {
            abort(404);
        }

        $file = $request->image;
        if(!empty($file)){
            //kiểm tra loại hình phù hợp
            $request->validate([
                'image'=> 'required|mimes:png,jpg,bmp,jpeg'
            ],
            [
                'image.required' => 'Please enter product image',
                'image.mines' => 'Image must be png,jpg,bmp,jpeg'
            ]
            );
            //xoá hình cũ
            $old_image_path = public_path('uploads/'. $products->image);
            if(file_exists($old_image_path)) {
                unlink($old_image_path);
            }
            //cập nhật hình mới
            $fileName = time(). "_" . $file->getClientOriginalName();
            $products->image = $fileName;
            $file->move(public_path('uploads/'), $fileName);

        }
        
        $file = $request->file('image');
        
        $products->name = $request->name;
        $products->price = $request->price;
        $products->description = $request->description;
        $products->content = $request->content;
        $products->category_id = $request->category_id;
        $products->status = $request->status;
        $products->featured = $request->featured;
        $products->user_id = 1;

        $products->save();
       
        return redirect()->route('admin.product.index')->with('success', 'Create product successfully');
 
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $products = Product::find($id);

        if ($products == null) {
            abort(404);
        }

        $old_image_path = public_path('uploads/'. $products->image);
        if(file_exists($old_image_path)) {
            unlink($old_image_path);
        }
        $products->delete();
        
        return redirect()->route('admin.product.index')->with('success', 'Delete product successfully');
    }
}
