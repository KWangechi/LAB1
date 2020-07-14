<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/', 'Controller@index');

Route::get('/car' , 'CarController@allCars');
Route::get('/particularCar/{id}' , 'CarController@particularCar');

//

//gets then form for the new car
Route::get('/car/new' , 'CarController@index');

//posts the newcar created
Route::post('/newcar' , 'CarController@newCar');




