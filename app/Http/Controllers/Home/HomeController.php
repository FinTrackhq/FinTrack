<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function HomePage()
    {
        return view('main.main');
    }

    public function LogOut()
    {
        Auth::logout();
        return redirect('/');
    }
}
