<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/',[MainController::class,'index'])->name('index');
Route::get('blog',[MainController::class,'blog'])->name('blog');
Route::get('search',[MainController::class,'search'])->name('search');
Route::get('products/',[MainController::class,'products'])->name('products');
Route::get('product/{id}',[MainController::class,'product'])->name('product');
Route::get('purchase/{id}',[MainController::class,'purchase'])->name('purchase');
Route::get('login',[MainController::class,'login'])->name('login');
Route::get('dashboard',function(){return view('login');});
Route::post('dashboard',[MainController::class,'dashboard'])->name('dashboard');
