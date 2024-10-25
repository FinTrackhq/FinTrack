<?php

use App\Http\Controllers\Feedback\FeedbackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use Spatie\Health\Http\Controllers\HealthCheckResultsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::domain('status.fintrack.space')->group(function () {
    Route::get('/', HealthCheckResultsController::class);
});
Route::controller(HomeController::class)->group(function (){
    Route::get('/', 'HomePage')->name('Home.Page');
    Route::post('/', 'LogOut')->name('LogOut');
});
Route::controller(FeedbackController::class)->prefix('feedback')->group(function (){
    Route::post('/create', 'create')->name('feedback.create');
});
