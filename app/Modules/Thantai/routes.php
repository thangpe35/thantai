<?php
$namespace = 'App\Modules\Thantai\Controllers';
use Illuminate\Support\Facades\Route;
Route::group([
    'middleware' => 'web',
    'module' => 'Thantai',
    'namespace' => $namespace
    ], function () {
    Route::group(['prefix' => '/'], function () {
        Route::get('/index', 'ThantaiController@index');  
    });
});