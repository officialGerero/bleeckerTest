<?php

use App\Http\Controllers\DashboardController;
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
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'giveData'])
    ->middleware(['auth','verified'])
    ->name('dashboard');
Route::post('/verify-code',[DashboardController::class,'verifyCode'])->middleware('auth')->name('verify.code');
Route::get('/verify-code',[DashboardController::class,'verifyPage'])->middleware('auth')->name('verify.page');

require __DIR__.'/auth.php';
