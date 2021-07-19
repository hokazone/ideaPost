<?php

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

Route::get("/hello", function () {
	print("<h1>Hello World!</h1>");
	return null;
});

Route::get("/test", function () {
    return view('test');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/mypage', function () {
    return view('mypage');
})->name('mypage');

Route::middleware(['auth:sanctum', 'verified'])->get('/timeline', function () {
    return view('timeline');
})->name('timeline');

Route::middleware(['auth:sanctum', 'verified'])->get('/new_post', function () {
    return view('new_post');
})->name('new_post');
