<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('cms/auth/login');
    }
    public function proses_login(Request $request)
    {
        $email      = $request->input('email');
        $password   = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return response()->json([
                'success' => true
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Login Gagal!'
            ], 401);
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/admin');
    }
}
