<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/order.php', function () {
    return view('order');
});
Route::get('/recipe.php', function () {
    return view('recipe');
});
Route::get('/location.php', function () {
    return view('location');
});


Route::view('/order', 'order');
