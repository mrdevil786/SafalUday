<?php

use App\Http\Controllers\Website\BasicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\DonationController;
use App\Http\Controllers\Website\SubscriberController;

// Route::get('/', function () {
//     return view('site.home');
// });

// Route::get('/about', function () {
//     return view('site.about');
// });

// Route::get('/contact', function () {
//     return view('site.contact');
// });

Route::post('/subscribe', [SubscriberController::class, 'subscribe'])->name('subscribe');
Route::post('/unsubscribe', [SubscriberController::class, 'unsubscribe'])->name('unsubscribe');

Route::get('/donate', [DonationController::class, 'index'])->name('donate.form');
Route::post('/donate', [DonationController::class, 'processPayment'])->name('donate.process');
Route::post('/payment-success', [DonationController::class, 'paymentSuccess'])->name('donate.success');

Route::get('/privacy-policy', [BasicController::class, 'privacy_policy'])->name('site.privacy-policy');
Route::get('/terms-of-service',[BasicController::class, 'terms_of_service'])->name('site.terms-of-service');
Route::get('/refund-policy',[BasicController::class, 'refund_policy'])->name('site.refund-policy');

Route::get('/program',[BasicController::class, 'program'])->name('site.program');
Route::get('/event', [BasicController::class, 'event'])->name('site.event');

Route::get('/', [BasicController::class, 'home'])->name('site.home');
Route::get('/about', [BasicController::class, 'about'])->name('site.about');
Route::get('/contact', [BasicController::class, 'contact'])->name('site.contact');
