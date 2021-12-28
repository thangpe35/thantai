<?php
$namespace = 'App\Modules\Admin\Controllers';
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'web',
    'module' => 'Admin',
    'namespace' => $namespace
    ], function () {

    Route::group(['prefix' => '/'], function () {
        Route::get('admin', 'AdminController@index');  
        Route::get('add_category_product', 'AdminController@add_category_product');  
        Route::post('add_category_product', 'AdminController@store');  
        Route::get('all_category_product', 'AdminController@all_category_product'); 
        Route::delete('all_category_product/{id}', 'AdminController@destroy'); 
        Route::get('create_category_product/{id}', 'AdminController@show'); 
        Route::post('create_category_product/{id}', 'AdminController@update'); 
    });
});