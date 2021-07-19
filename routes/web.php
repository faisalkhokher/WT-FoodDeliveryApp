<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminDashboardController;

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

Route::get('/',[DashboardController::class,'indexPage'])->name('layouts.frontend');;
Route::get('/Contact_us',[DashboardController::class,'Contactus'])->name('Pages.Contact_us');
Route::get('/About_us',[DashboardController::class,'Aboutus'])->name('Pages.About_us');
Route::get('/Pizza',[DashboardController::class,'Pizza'])->name('Pages.Pizza');
Route::get('/Noodles',[DashboardController::class,'Noodles'])->name('Pages.Noodles');
Route::get('/Juice',[DashboardController::class,'Juice'])->name('Pages.Juice');
Route::get('/Hamburger',[DashboardController::class,'Hamburger'])->name('Pages.Hamburger');
Route::get('/Cupcake',[DashboardController::class,'Cupcake'])->name('Pages.Cupcake');
Route::get('/Login',[DashboardController::class,'Login'])->name('Auth.Login');
Route::get('/Register',[DashboardController::class,'Register'])->name('Auth.Register');
Route::get('/ReLos-mayas-vegetable',[DashboardController::class,'Los_mayas_vegetable'])->name('Pages.Los-mayas-vegetable');
Route::get('/Chickens-los-mayas',[DashboardController::class,'Chickens_los_mayas'])->name('Pages.Chickens-los-mayas');
Route::get('/Peas-noodles-los',[DashboardController::class,'Peas_noodles_los'])->name('Pages.Peas-noodles-los');
Route::get('/los-berry-beboppin',[DashboardController::class,'los_berry_beboppin'])->name('Pages.los-berry-beboppin');
Route::get('/Berry-bunch-beboppin',[DashboardController::class,'Berry_bunch_beboppin'])->name('Pages.Berry-bunch-beboppin');
Route::get('/Breakfast-of-champions',[DashboardController::class,'Breakfast_of_champions'])->name('Pages.Breakfast-of-champions');
Route::get('/Bushels-of-fun',[DashboardController::class,'Bushels_of_fun'])->name('Pages.Bushels-of-fun');
Route::get('/Cooking-up-a-storm',[DashboardController::class,'Cooking_up_a_storm'])->name('Pages.Cooking-up-a-storm');
Route::get('/Trix-is-for-kids',[DashboardController::class,'Trix_is_for_kids'])->name('Pages.Trix-is-for-kids');
Route::get('/The-sweet-fruits-of-summer',[DashboardController::class,'The_sweet_fruits_of_summer'])->name('Pages.The-sweet-fruits-of-summer');
Route::get('/Milk-it-does-a-baby-good',[DashboardController::class,'Milk_it_does_a_baby_good'])->name('Pages.Milk-it-does-a-baby-good');
Route::get('/Just-a-little-bit-corny',[DashboardController::class,'Just_a_little_bit_corny'])->name('Pages.Just-a-little-bit-corny');
Route::get('/Food-Fight-and-mommy-lost',[DashboardController::class,'Food_Fight_and_mommy_lost'])->name('Pages.Food-Fight-and-mommy-lost');
Route::get('/Finger-lickin-good',[DashboardController::class,'Finger_lickin_good'])->name('Pages.Finger-lickin-good'); 




Route::get('/admin/',[AdminDashboardController::class,'indexpagee'])->name('layouts.Backend');
