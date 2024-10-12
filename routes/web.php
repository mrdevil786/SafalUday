<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DonationsController;
use App\Http\Controllers\Admin\InternshipsController;
use App\Http\Controllers\Admin\JobsController;
use App\Http\Controllers\Admin\ProfilesController;
use App\Http\Controllers\Admin\SubscribersController;
use App\Http\Controllers\Admin\TeamsController;
use App\Http\Controllers\Admin\VolunteersController;

Route::prefix('admin')->middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'loginView'])->name('view.login');
    Route::post('/login', [AuthController::class, 'login'])->name('submit.login');
});

Route::prefix('admin')->name('admin.')->middleware(['auth:sanctum', 'web', 'checkAdminStatus'])->group(function () {

    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('user.logout');

    Route::name('users.')
        ->prefix('users')
        ->middleware('admin')
        ->controller(UsersController::class)->group(function () {
            Route::get('/{id}', 'destroy')->name('destroy');
            Route::put('status', 'status')->name('status');
            Route::put('create', 'create')->name('create');
        });

    Route::name('users.')
        ->prefix('users')
        ->middleware('manager')
        ->controller(UsersController::class)->group(function () {
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update/{id}', 'update')->name('update');
        });

    Route::name('users.')
        ->prefix('users')
        ->middleware('member')
        ->controller(UsersController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('view/{id}', 'view')->name('view');
        });

    Route::name('subscribers.')
        ->prefix('subscribers')
        ->middleware('admin')
        ->controller(SubscribersController::class)->group(function () {
            Route::get('/{id}', 'destroy')->name('destroy');
            Route::delete('/delete-all', 'truncate')->name('truncate');
        });

    Route::name('subscribers.')
        ->prefix('subscribers')
        ->middleware('member')
        ->controller(SubscribersController::class)->group(function () {
            Route::get('/', 'index')->name('index');
        });

    Route::name('donations.')
        ->prefix('donations')
        ->middleware('admin')
        ->controller(DonationsController::class)->group(function () {
            Route::get('/{id}', 'destroy')->name('destroy');
            Route::post('/delete-all', 'flush')->name('flush');
        });

    Route::name('donations.')
        ->prefix('donations')
        ->middleware('member')
        ->controller(DonationsController::class)->group(function () {
            Route::get('/', 'index')->name('index');
        });

    // Teams Route
    Route::name('teams.')
        ->prefix('teams')
        ->middleware('admin')
        ->controller(TeamsController::class)->group(function () {
            Route::get('/{id}', 'destroy')->name('destroy');
            Route::put('status', 'status')->name('status');
            Route::put('create', 'create')->name('create');
        });

    Route::name('teams.')
        ->prefix('teams')
        ->middleware('manager')
        ->controller(TeamsController::class)->group(function () {
            Route::post('store', 'store')->name('store');
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::put('update/{id}', 'update')->name('update');
        });

    Route::name('teams.')
        ->prefix('teams')
        ->middleware('member')
        ->controller(TeamsController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('view/{id}', 'view')->name('view');
        });

    // Volunteer Route

    Route::name('volunteers.')
        ->prefix('volunteers')
        ->middleware('admin')
        ->controller(VolunteersController::class)->group(function () {
            Route::get('/{id}', 'destroy')->name('destroy');
            // Route::put('status', 'status')->name('status');
            // Route::put('create', 'create')->name('create');
        });

    Route::name('volunteers.')
        ->prefix('volunteers')
        ->middleware('member')
        ->controller(VolunteersController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            // Route::get('view/{id}', 'view')->name('view');
        });

    // Job Route

    Route::name('jobs.')
        ->prefix('jobs')
        ->middleware('admin')
        ->controller(JobsController::class)->group(function () {
            Route::get('/{id}', 'destroy')->name('destroy');
            // Route::put('status', 'status')->name('status');
            // Route::put('create', 'create')->name('create');
        });

    Route::name('jobs.')
        ->prefix('jobs')
        ->middleware('member')
        ->controller(JobsController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            // Route::get('view/{id}', 'view')->name('view');
        });


    // Internship Route

    Route::name('internships.')
        ->prefix('internships')
        ->middleware('admin')
        ->controller(InternshipsController::class)->group(function () {
            Route::get('/{id}', 'destroy')->name('destroy');
            // Route::put('status', 'status')->name('status');
            // Route::put('create', 'create')->name('create');
        });

    Route::name('internships.')
        ->prefix('internships')
        ->middleware('member')
        ->controller(InternshipsController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            // Route::get('view/{id}', 'view')->name('view');
        });

    // Profile Route
    Route::name('profile.')
        ->prefix('profile')
        ->middleware('member')
        ->controller(ProfilesController::class)
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('view/{id}', 'view')->name('view');
            Route::post('update', 'updateProfile')->name('update');
            Route::post('update-password', 'updatePassword')->name('update.password');
        });
});

// Route::name('users.')
//     ->prefix('users')
//     ->controller(UsersController::class)->group(function () {
//         Route::get('/', 'index')->name('index');
//         Route::get('blocked', 'index')->name('blocked');
//         Route::get('deleted', 'index')->name('deleted');
//         Route::post('store', 'store')->name('store');
//         Route::get('edit/{id}', "edit")->name('edit');
//         Route::delete('/{id}', 'destroy')->name('destroy');
//         Route::post('update', 'update')->name('update');
//         Route::put('status', 'status')->name('status');
//         Route::get('view/{id}', 'showUser')->name('show');
//     });
