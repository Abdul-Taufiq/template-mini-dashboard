<?php

use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\HelperController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('home');
    } else {
        return view('auth.login', [
            'title' => 'Login',
        ]);
    }
});

Route::get('hash/{id}', function () {
    return bcrypt('id');
});

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::get('/refereshcapcha', [HelperController::class, 'refereshCaptcha']);


// default route login laravel ui
Auth::routes([
    'register' => false, // Menonaktifkan halaman register
]);

Route::middleware(['auth'])->group(function () {
    Route::get('/xxx', [App\Http\Controllers\HelperController::class, 'index'])->name('xxx');
    Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

    // Profile
    Route::resource('profile', ProfileController::class)->only([
        'index',
        'update'
    ]);
    Route::post('profile/upload/{user}', [ProfileController::class, 'upload'])->name('profile.upload');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
