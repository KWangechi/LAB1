<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


//routes for the reviews
Route::get('reviews', 'ReviewController@index');
Route::post('/review/create' , 'ReviewController@create');
Route::post('carreview', 'ReviewController@review');
Route::post('cardetails', 'ReviewController@cardetails');
