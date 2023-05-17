<?php

use App\Http\Controllers\Api\DashboardPostController;
use App\Http\Controllers\DashboardPostController2;
use App\Http\Controllers\PetaniController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API Dashboard post
Route::get('/dataposts', [DashboardPostController::class, 'index'])->name('dataposts');

Route::resource('petanis', PetaniController::class);
