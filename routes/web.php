<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\kirimEmailController;

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
});

Route::get('/overview', function () {
    return view('company.overview');
});
Route::get('/vision', function () {
    return view('company.vision');
});
Route::get('/history', function () {
    return view('company.history');
});
Route::get('/network', function () {
    return view('company.network');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/specifications', function () {
    return view('specifications.specifications');
});
Route::get('/specifications1', function () {
    return view('specifications.specifications1');
});

Route::get('/specifications2', function () {
    return view('specifications.specifications2');
});

Route::get('/specifications3', function () {
    return view('specifications.specifications3');
});

Route::post('/contact', [kirimEmailController::class, 'sendEmail'])->name('contact');
;