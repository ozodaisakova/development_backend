<?php

use Illuminate\Http\Request;

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
Route::group(['prefix'=>'v1', 'namespace'=>'Admin'], function(){
    Route::resources([
        '/category'=>'CategoryController',
        '/product'=>'ProductController'
    ]);
    Route::get('/products_of_category', 'ProductController@products_of_controller');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
