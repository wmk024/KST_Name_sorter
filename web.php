<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\DownloadPageController;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/sort',  [FileController::class, 'execute']);
Route::get('/downloadpage',  [DownloadPageController::class, 'index']);