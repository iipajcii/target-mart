<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('create-product', function (Request $request){
    if($request->image){$path = $request->file('image')->store('public/showcase-images');$request->image = $path;}
    Product::add_product($request);
    return $request;
})->name('api-create-product');
Route::post('edit-product', function (Request $request){
    if($request->image){$path = $request->file('image')->store('public/showcase-images');$request->image = $path;}
    Product::edit_product($request);
    return $request;
})->name('api-edit-product');
Route::post('toggle-product', function (Request $request){
    return Product::toggle_product($request);
})->name('api-toggle-product');

Route::get('products',function(){return Product::all();})->name('api-products');
