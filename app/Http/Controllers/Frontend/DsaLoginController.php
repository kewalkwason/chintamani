<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController as DefaultLoginController;
use App\Models\UserLogin;

class DsaLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:dsa')->except('logout');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Auth::user('dsa'));
        return view('frontend.dsa.dashboard');
    }
    public function showLoginForm()
    {
        return view('auth.dsa_login');
    }
    public function username()
    {
        return 'dsa_id';
    }
    protected function guard()
    {
        return Auth::guard('dsa');
    }
    
    public function login(Request $request) {

        if (Auth::guard('dsa')->attempt(['user_email' => $request->email, 'password' => 
        $request->password], $request->remember)) {
        return redirect()->intended(route('dsa.home'));
     }
    }

    public function logout(Request $request) {

        auth()->logout();
        return redirect()->intended(route('home'));
     }
}
