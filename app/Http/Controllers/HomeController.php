<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // Ensure this controller uses authentication middleware
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        // Redirect based on user type
        if ($usertype === '1') {
            return view('admin.home');
        } else {
            return view('dashboard');
        }
    }

    public function index()
    {
        return view('User.home');
    }
}
