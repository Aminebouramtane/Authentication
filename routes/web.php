<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;

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

Route::get('/login', function () {
    return view('index');
})->name("index")->middleware("guest");

Route::get('/', function () {
    return view('home');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware("auth");

Route::post("/register",[RegisterController::class ,'register'])->name("register");
Route::get("/logout",[LogoutController::class ,'logout'])->name("logout");
Route::post("/login",[LoginController::class ,'login'])->name("login");
