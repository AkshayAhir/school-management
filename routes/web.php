<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\DashboardController;

Route::get('admin/register', [AdminController::class, 'register']);
Route::get('admin/login', [AdminController::class, 'index'])->name('login');
Route::post('admin/login_data', [AdminController::class, 'loginUser']);
Route::get('admin/logout', [AdminController::class, 'logout']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
});
