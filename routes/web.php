<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
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

Route::resource('thantai',ArticleController::class);
Route::post('thantai','App\Http\Controllers\ArticleController@postVali');
// Route::get('thantai/404','App\Http\Controllers\ArticleController@error_page');