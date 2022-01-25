<?php

use App\Http\Controllers\CartController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/item',\App\Http\Controllers\ItemController::class);



Route::get('/addtocart/{id}',[CartController::class,'addToCart'])->name('addtocart');
Route::get('/multipleaddtocart/{id}/{qnt}',[CartController::class,'addMultipleToCart'])->name('addmultipletocart');
Route::get('/removecart/{id}/',[CartController::class,'removeCart'])->name('removeCart');
Route::get('/destroyCart',[CartController::class,'destroyCart'])->name('destroyCartm');


Route::get('/mycart',[CartController::class,'myCart'])->name('mycart');


Route::get('/about',function (){
    return view('about');
});

Route::get('/terms', function(){
    return view('terms');
});
Route::get('/privacy', function(){
    return view('privacy');
});

Route::get('/contact', [\App\Http\Controllers\AddressController::class,'index'])->name('contact');

