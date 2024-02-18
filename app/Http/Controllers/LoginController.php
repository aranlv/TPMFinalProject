<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'group-name'=> 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            if (auth()->user()->is_admin) {
                return redirect()->intended('admin-panel');
            }
    
            return redirect()->intended('dashboard');
        }
        
        
        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('');
    }

    
}