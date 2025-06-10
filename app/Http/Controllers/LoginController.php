<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;


class LoginController extends Authenticatable
{
   
   public function viewForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('usuario', 'password');
        
        if(Auth::attempt($credentials)) {
            // Authentication passed, redirect to intended page
            return redirect()->intended('inicio');
        }else {
            $error = 'Invalid credentials';
            return view('login', compact('error'));
        }
    }

    public function logout()
    {
        // Implement logout logic here
        Auth::logout();
        
        return redirect()->route('login');
    }
   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
}
