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
        Route::get('thantai', 'ThantaiController@index');  
        Route::post('thantai/them', 'ThantaiController@store');  
        // Route::post('thantai/them', 'ThantaiController@postVali');  
    });

});


