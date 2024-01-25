<?php

use App\Http\Controllers\Feedback\FeedbackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(HomeController::class)->group(function (){
    Route::get('', 'HomePage')->name('Home.Page');
});
Route::controller(FeedbackController::class)->prefix('feedback')->group(function (){
    Route::post('/create', 'create')->name('feedback.create');
});
