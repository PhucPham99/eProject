<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Models\Product;
use App\Models\ProductImages;
use App\Models\User;
use App\Models\Category;


class GuestController extends Controller
{
    public function home() {
        $categories = Category::where('parent_id', '!=', 0)->get();

        $products = Product::with('user')->orderBy('created_at','DESC')->skip(0)->take(10)->get();
        
        
        return view('clients.page.home', [
            'categories' => $categories,
            'products' => $products,
            
            
        ]);
    }

    public function showLogin() {
        if( Auth::check()) {
            return redirect()->back();
        }
        return view('clients.page.login-register');
    }

    public function register(StoreRequest $request) {
        $user = new User();
         
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->status = $request->status;
        $user->fullname = $request->fullname;
        $user->phone = $request->phone;
        $user->level = $request->level;

        $user->save();

        return redirect()->route('page.home')->with('success','Regis user successfully');
    }
    public function login(LoginRequest $request) {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'status' => 1
        ];  

        if(Auth::attempt($credentials)) {
            if(Auth::user()->level == 1) {
                return redirect()->route('admin.user.index');
            }
            else if(Auth::user()->level == 2) {
                return redirect()->route('admin.user.index');
            }   
            else if(Auth::user()->level == 3) {
                return redirect()->route('admin.user.index');
            }
            else {
                return redirect()->route('page.home');
            }   
            return redirect()->route('admin.user.index');
        }
        return redirect()->back();
    }

    

  

    public function aboutUs() {
        return view('clients.page.about_us');
    }

    public function blog() {
        return view('clients.page.blog');
    }

   

    public function compare() {
        return view('clients.page.compare');
    }

    public function contact() {
        return view('clients.page.contact');
    }

   

}
