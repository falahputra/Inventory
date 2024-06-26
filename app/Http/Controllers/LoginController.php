<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
            'title'=>'Login'
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        
        // dd($credentials);
        if(Auth::attempt( $credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError','Login failed!');
    }

    public function logout(Request $request){
        Auth::logout();

        request()->session()->invalidate();
        
        request()->session()->regenerateToken();
        
        return redirect('/');
    }
}
