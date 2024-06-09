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
    $products = config("productsDB.products");
    return view('home', compact('products'));
})->name("home");


Route::get('/uomini', function () {
    return view('man');
})->name("man");


Route::get('/donne', function () {
    return view('woman');
})->name("woman");

Route::get('/bambini', function () {
    return view('kid');
})->name("kid");
