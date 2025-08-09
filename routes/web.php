<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\UserSettingController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/order_steps', function () {
    return view('Home/order_steps');
})->name('order_steps');

Route::get('/testimonials', function () {
    return view('Home/testimonials');
})->name('testimonials');

Route::get('/gallery', function () {
    return view('Home/gallery_templates');
})->name('gallery');

Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'loginProcess'])->name('login.process');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerAdmin'])->name('register.admin');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('user-settings', UserSettingController::class)->names([
        'index' => 'admin.user_settings.index',
        'create' => 'admin.user_settings.create',
        'store' => 'admin.user_settings.store',
        'show' => 'admin.user_settings.show',
        'edit' => 'admin.user_settings.edit',
        'update' => 'admin.user_settings.update',
        'destroy' => 'admin.user_settings.destroy',
    ]);
});
