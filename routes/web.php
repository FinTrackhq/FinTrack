<?php

use App\Http\Controllers\Feedback\FeedbackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::controller(HomeController::class)->group(function (){
    Route::get('', 'HomePage')->name('Home.Page');
});

Route::controller(FeedbackController::class)->prefix('feedback')->group(function (){
    Route::post('/create', 'create')->name('feedback.create');
});

Route::get('/login', function () {
    return redirect(route('filament.dashboard.php.auth.login'));
})->name('login');
