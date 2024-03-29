<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use App\Models\User;
use GuzzleHttp\Promise\Create;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('created_at', 'DESC')->where('status', '!=', 3)->get();

        return view('admin.modules.category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $users = User::get();
        return view('admin.modules.category.create',['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $categories = new Category();
 
        $categories->name = $request->name;
        $categories->status = $request->status;
        $categories->user_id = $request->user_id;

        $categories->save();

        return redirect()->route('admin.category.index')->with('success', 'Create category successfully');
 
        
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
    public function edit(int $id)
    {
        $category = Category::findOrFail($id);
        if ($category == null) {
            abort(404);
        }
        return view('admin.modules.category.edit' ,
        [
            'id'=> $id,
            'category' => $category
        ] );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $category = Category::findOrFail($id);
        if ($category == null) {
            abort(404);
        }
        $category->$request->name;
        $category->$request->status;
        $category->save();

        return redirect()->route('admin.category.index')->with('success', 'Update category successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
         
            $categories = Category::findOrFail($id);

            $categories->status = 3;
            $categories->save();
            
            return redirect()->route('admin.category.index')->with('success', 'Delete category successfully');
    }
}
