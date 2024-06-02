<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\SubscriberController;

Route::get('/', function () {
    return view('site.home');
});

Route::get('/about', function () {
    return view('site.about');
});

Route::get('/donate', function () {
    return view('site.donate');
});

Route::get('/contact', function () {
    return view('site.contact');
});

Route::post('/subscribe', [SubscriberController::class, 'subscribe'])->name('subscribe');
Route::post('/unsubscribe', [SubscriberController::class, 'unsubscribe'])->name('unsubscribe');
