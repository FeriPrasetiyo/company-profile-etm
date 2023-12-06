<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/specifications/tiningot', function () {
    return view('tiningot2');
});
Route::get('/specifications/copperingot', function () {
    return view('tiningot1');
});
Route::get('/specifications', function () {
    return view('specifications');
});