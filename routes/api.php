<?php

use Illuminate\Http\Request;

Route::group(['prefix'=>'v1', 'namespace'=>'Admin', 'middleware' => 'cors'], function(){

    // Тауарлар каталогы маршруттары
    Route::get('/catalog', 'CatalogController@index');   // Барлық каталогтар тізімін көрсету
    Route::get('/catalog/{catalog}', 'CatalogController@show'); // Нақты бір каталог шығару
    Route::post('/catalog', 'CatalogController@store'); // Каталогты деректер қорына сақтау
    Route::put('/catalog/{catalog}', 'CatalogController@update'); // Деректер қорында бар каталогқа өзгерістер енгізу
    Route::delete('/catalog/{catalog}', 'CatalogController@destroy'); // Деректер қорынан каталогты жою


    // Тауарлар маршруттары
    Route::get('/product', 'ProductController@index');   // Барлық тауарлар тізімін көрсету
    Route::get('/products-of-catalog', 'ProductController@products_of_catalog'); //Бір каталог құрамын кіретін тауарлар тізімін шығару
    Route::get('/product/{product}', 'ProductController@show'); // Нақты бір тауарды шығару
    Route::post('/product', 'ProductController@store'); // Тауарды деректер қорына сақтау
    Route::put('/product/{product}', 'ProductController@update'); // Деректер қорында бар тауарға өзгерістер енгізу
    Route::delete('/product/{product}', 'ProductController@destroy'); // Деректер қоррынан тауарды жою


    // Ақпараттық парақшалар маршруттары
    Route::get('/information', 'InformationController@index');   // Барлық ақпарат парақшалары тізімін көрсету
    Route::get('/information/{information}', 'InformationController@show'); // Нақты бір ақпарат парақшасын  шығару
    Route::post('/information', 'InformationController@store'); // Ақпарат парақшасын деректер қорына сақтау
    Route::patch('/information/{information}', 'InformationController@update'); // Деректер қорында бар ақпарат парақшасына өзгерістер енгізу
    Route::delete('/information/{information}', 'InformationController@destroy'); // Деректер қорынан ақпарат парақшасын жою

    //Тапсырыстар (заказы) маршруттары
    Route::get('/productorder', 'ProductOrderController@all'); // Барлық тапсырыстар тізімін шығару
    Route::post('/productorder', 'ProductOrderController@store'); // Тапсырысты деректер қорына қосу
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
