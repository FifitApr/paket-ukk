<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }  

      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postlogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->level == 'admin') {
                return redirect()->intended('admin');
            }elseif ($user->level == 'resep') {
                return redirect()->intended('resep');
            }
            return redirect()->intended('/');
        }
        return redirect('login');
    } 

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('/');
    }

}
