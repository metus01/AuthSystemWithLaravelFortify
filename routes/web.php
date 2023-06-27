<?php

use App\Http\Controllers\AuthentificatedSessionController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

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
    return view('welcome');
});
Route::get('/home' , function()
{
    return view('welcome');
});
// Route::get('/login' , [AuthentificatedSessionController::class, 'create'])->name('login')->middleware('guest');
// Route::post('/login' , [AuthenticatedSessionController::class , 'store'])->middleware('guest');
