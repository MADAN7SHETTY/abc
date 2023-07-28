<?php

use App\Http\Controllers\Shop;
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
    return view('home');
});

Route::post('/insert', [Shop::class, 'index']);
Route::post('/getin', [Shop::class, 'login']);
Route::get('/login', [Shop::class, 'log']);
Route::get('/register', [Shop::class, 'reg']);
Route::get('/logot', [Shop::class, 'logout']);
