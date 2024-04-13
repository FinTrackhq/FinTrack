<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function HomePage()
    {
        $resource = Cache::remember('github_stars', 86400, function () {
            return Http::withToken(config('githubapi.TOKEN'))->get('https://api.github.com/repos/fintrackhq/fintrack')['stargazers_count'];
        });
        return view('main.main' ,compact('resource'));
    }

    public function LogOut()
    {
        Auth::logout();
        return redirect('/');
    }
}
