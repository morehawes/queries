<?php

use Illuminate\Support\Facades\Route;
use App\Models\Shop;

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
    $bounding_box = '';

    return view('queries');
});

Route::get('/shops/', function () {
    return Shop::all();
});
