<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function HomePage()
    {
        $response = Http::get('https://api.github.com/repos/fintrackhq/fintrack')['stargazers_count'];
        return view('main.main', compact('response'));
    }

    public function LogOut()
    {
        Auth::logout();
        return redirect('/');
    }
}
