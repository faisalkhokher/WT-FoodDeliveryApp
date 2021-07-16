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
Route::get('/Index', function () {
    return view('layouts.frontend');
})->name('layouts.frontend');
Route::get('/Contact_us', function () {
    return view('Pages.Contact_us');
})->name('Pages.Contact_us');
Route::get('/About_us', function () {
    return view('Pages.About_us');
})->name('Pages.About_us');
Route::get('/Pizza', function () {
    return view('Pages.Pizza');
})->name('Pages.Pizza');
Route::get('/Noodles', function () {
    return view('Pages.Noodles');
})->name('Pages.Noodles');
Route::get('/Juice', function () {
    return view('Pages.Juice');
})->name('Pages.Juice');
Route::get('/Hamburger', function () {
    return view('Pages.Hamburger');
})->name('Pages.Hamburger');
Route::get('/Cupcake', function () {
    return view('Pages.Cupcake');
})->name('Pages.Cupcake');
Route::get('/Login', function () {
    return view('Auth.login');
})->name('Auth.login');
Route::get('/Register', function () {
    return view('Auth.Register');
})->name('Auth.Register');
Route::get('/Los-mayas-vegetable', function () {
    return view('Pages.Los-mayas-vegetable');
})->name('Pages.Los-mayas-vegetable');
Route::get('/Chickens-los-mayas', function () {
    return view('Pages.Chickens-los-mayas');
})->name('Pages.Chickens-los-mayas');
Route::get('/Peas-noodles-los', function () {
    return view('Pages.Peas-noodles-los');
})->name('Pages.Peas-noodles-los');
Route::get('/los-berry-beboppin', function () {
    return view('Pages.los-berry-beboppin');
})->name('Pages.los-berry-beboppin');
