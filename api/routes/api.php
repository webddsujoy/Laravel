<?php

use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return 'cache cleard!!';
});

Route::group(['middleware' => 'auth:api'], function () {
    // get users list
    Route::get('/', [UsersController::class, 'index']);
    Route::get('user-list', [UsersController::class, 'getUsers']);
    Route::post('logout', [RegisterController::class, 'logout']);
});