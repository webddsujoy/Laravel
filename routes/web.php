<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/login');
});

// Login
Route::get('/login', function () {
    return view('auth.login');
});

// Register
Route::get('/register', function () {
    return view('auth.register');
});

// Forgot password
Route::get('/forgot-password', function () {
    return view('auth.forgot_password');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('admin.dashboard.dashboard');
});

// Manage profile
Route::get('/manage-profile', function () {
    return view('admin.user.manageProfile');
});

// General settings
Route::get('/general-settings', function () {
    return view('admin.generalSettings.generalSettings');
});

// Roles
Route::get('/roles', function () {
    return view('admin.Roles.Role');
});

// Admin
Route::get('/admin', function () {
    return view('admin.admin.admin');
});