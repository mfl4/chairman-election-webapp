<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\leaderController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/input-leader', [leaderController::class, 'index'])->name('dashboardLeader')->middleware("auth", "checkAdmin");
Route::post('/input-leader', [leaderController::class, 'store'])->name('inputLeader')->middleware("auth","checkAdmin");
Route::get('/login', [loginController::class, 'index'])->name('login')->middleware("guest");
Route::post('/login', [loginController::class, 'login'])->name('loginAuth')->middleware("guest");
Route::get('/logout', [loginController::class, 'logout'])->name('logout');
Route::get('/choose-leader', [userController::class, 'index'])->name('chooseLeader')->middleware("auth", "checkUser");
Route::post('/choose-leader', [userController::class, 'store'])->name('choosed')->middleware("auth", "checkUser");
Route::post('/input-leader/send-email', [adminController::class, 'sendAllEmail'])->name('send')->middleware("auth", "checkAdmin");


Route::get('/leaders', [leaderController::class, 'outputLeader'])->name('leader');