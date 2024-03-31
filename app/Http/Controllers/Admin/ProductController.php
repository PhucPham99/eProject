<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Http\Requests\Admin\Product\StoreRequest;
use App\Http\Requests\UploadRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImages;
use DateTime;
use Illuminate\Foundation\Console\StorageUnlinkCommand;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        
        $products = Product::with('category')->orderBy('created_at', "DESC")->get();
        return view('admin.modules.product.index', [
            'products' => $products,
            
            ]);
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
        $products->quantity = $request->quantity;   

        $products->user_id = Auth::user()->id;

        $products->save();
        $file->move(public_path('uploads/'), $fileName);

        

        if($request->image != null){
            $this->uploadImageDetail($request->images, $products->id);
        }

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
        $product = Product::with('product_images')->findOrFail($id);
        
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
        $products = Product::findOrFail($id);
   
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
        if(!empty($products->quantity)){
            $products->quantity = $request->quantity;
        }
        $products->category_id = $request->category_id;
        $products->status = $request->status;
        $products->featured = $request->featured;
        $products->user_id =  Auth::user()->id;

        $products->save();
        if($request->image != null){
            $this->uploadImageDetail($request->images, $id);
        }
        
        return redirect()->route('admin.product.index')->with('success', 'Create product successfully');
 
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $products = Product::findOrFail($id);

        $old_image_path = public_path('uploads/'. $products->image);
        if(file_exists($old_image_path)) {
            unlink($old_image_path);
        }
        $products->delete();
        
        return redirect()->route('admin.product.index')->with('success', 'Delete product successfully');
    }

    public function uploadFile(UploadRequest $request, $id) {
       
        $file = $request->image;
        
        $fileName = time(). "_" . $file->getClientOriginalName();
        $file->move(public_path('uploads/'), $fileName);

        $product_image = ProductImages::find($id);
        $file_old_url = public_path('uploads/'.$product_image->images);
        if(file_exists($file_old_url)) {
            unlink($file_old_url);
        }

        $product_image->images = $fileName;
        $product_image->save();

        return response()->json([
            'message' => 'Image upload successfully'
        ], 200);
    }

    public function deleteFile($id) {
        $product_image = ProductImages::find($id);

        $file_old_url = public_path('uploads/'.$product_image->images);
        if(file_exists($file_old_url)) {
            unlink($file_old_url);
        }

        $product_image->delete();

        return redirect()->back();

    }

    public function uploadImageDetail($images, $id) {
        if(count($images) > 0 ) {
            $count = 0;
            $data_images = [];

            foreach($images as $img_detail){
            $count++;
            $fileNameDetail = $count . '_' . time(). "_" . $img_detail->getClientOriginalName();
            $img_detail->move(public_path('uploads/'), $fileNameDetail);
           
            $data_images[] = [
                'images' => $fileNameDetail,
                'product_id' => $id,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
            ];

        }
        ProductImages::insert($data_images);
        }
       
    }

    public function search(Request $request) {

    }
}
