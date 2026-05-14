<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('upload');
});

Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');

Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::resource('products', ProductController::class);
