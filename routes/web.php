<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;

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
    return view('index');
})->name("index");
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post("/register",[RegisterController::class ,'register'])->name("register");
Route::get("/logout",[LogoutController::class ,'logout'])->name("logout");
