<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Auth;
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

/* This is a comment by Mohammed Helmy */

/* This is a comment by amira ali */

Route::get('/', function () {
    return view('welcome');
});

// settings

// Route::apiResource('settings', SettingController::class);