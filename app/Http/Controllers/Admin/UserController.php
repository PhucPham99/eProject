<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'DESC')->where('status','!=',3)->get();
        return view('admin.modules.user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $user = new User();
         
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->status = $request->status;
        $user->fullname = $request->fullname;
        $user->level = $request->level;
        $user->phone = $request->phone;

        $user->save();

        return redirect()->route('admin.user.index')->with('success','Delete user successfully');
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
        $user = User::findOrFail($id);

        return view('admin.modules.user.edit' , [
            'id' => $id,
            'user' =>$user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $user = User::findOrFail($id);

        $user = new User();
         
        $user->email = $request->email;
        if (!empty($request->password)) { $request->validate([
            'password' => 'required|confirmed|min:8'
        ],
        [   
            'password.required' => 'Please enter password',
            'password.confirmed' => 'Confirm password does\'n match',
            'password.min' => 'Password must be least 8 chars',
        ]);
        $user->password = bcrypt($request->password);

    }
       
        
        $user->status = $request->status;
        $user->fullname = $request->fullname;
        $user->level = $request->level;
        $user->phone = $request->phone;

        $user->save();

        return redirect()->route('admin.user.index')->with('success','Create user successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $user = User::findOrFail($id);

        $user->status = 3;

        $user->save();

        return redirect()->route('admin.user.index')->with('success','Create user successfully');


    }
}
