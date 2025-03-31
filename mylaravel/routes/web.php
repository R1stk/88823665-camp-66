<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
Route::get('/', function () {
    return view('form');
});Route::post('/generate-table', [myController::class, 'generateTable']);
