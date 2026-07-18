<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (){
    return view('greeting');
});
Route::get('/about', [PageController::class, 'about']);

Route::get('/product_show', [PageController::class, 'showProduct']);

Route::get('/show-form', [PageController::class, 'showForm']);

Route::post('/shore', [PageController::class, 'storeData'])->name('store');
