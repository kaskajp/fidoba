<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackPostController;
use App\Http\Controllers\ThemeController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/feedback', 'App\Http\Controllers\FeedbackPostController@index', function() {
        return view('feedback');
    })->name('feedback');
});

Route::resource('feedbackPosts', 'App\Http\Controllers\FeedbackPostController');

Route::post('/theme/switch', [ThemeController::class, 'switchTheme'])->name('theme.switch');
