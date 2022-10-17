<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AllController;

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
    return view('welcome');
});
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::post('home', [AllController::class, 'home'])->name('home');
Route::get('shop', [AllController::class, 'shop'])->name('shop');
Route::get('buy/{product}', [AllController::class, 'buy'])->name('buy');
Route::get('detail/{product}', [AllController::class, 'detail'])->name('detail');
Route::get('checkout', [AllController::class, 'checkout'])->name('checkout');
Route::get('confirm', [AllController::class, 'confirm'])->name('confirm');

