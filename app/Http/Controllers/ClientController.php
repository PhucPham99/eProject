<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
  

    public function account() {
        return view('clients.page.my_account');
    }

    public function logout(Request $request) {
        Auth::logout();
         
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('page.home');
    }

    
}
