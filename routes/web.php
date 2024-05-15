<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Friendcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gunjan', function () {
    return 'hello gunjan';
});
Route::get('/computer',[Freindcontroller::class, 'computer']) {

    return view('computer');
});
