<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PharmacyUserController;
use App\Http\Controllers\QuotationController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/inqueries', function () {
        return view('inqueries');
    })->name('inqueries');

    Route::post('/postprescription',[PostController::class,'store']);
});

//redirects
Route::get('redirects',[PharmacyUserController::class,'index']);

Route::get('/admin',[PharmacyUserController::class,'index']);

Route::get('/vieworder/{id}', [PharmacyUserController::class, 'show']);
Route::get('/createquotation/{id}', [QuotationController::class, 'index']);
Route::post('/submitquotation', [QuotationController::class, 'store']);
