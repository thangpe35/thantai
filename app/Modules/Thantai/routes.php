<?php
$namespace = 'App\Modules\Thantai\Controllers';
use Illuminate\Support\Facades\Route;
Route::group([
    'middleware' => 'web',
    'module' => 'Thantai',
    'namespace' => $namespace
    ], function () {
    Route::group(['prefix' => '/'], function () {
        // Route::resources('thantai' ,'ThantaiController@index' );
        Route::get('index', 'ThantaiController@index');  
        Route::post('index', 'ThantaiController@store');  
        Route::post('index', 'ThantaiController@postVali');  
    });
});