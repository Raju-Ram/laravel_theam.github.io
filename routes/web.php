<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/raju','App\Http\controllers\Homecontroller@index');


Route::get('/back','App\Http\controllers\Homecontroller@back');
Route::get('/list','App\Http\controllers\Homecontroller@list');
Route::get('/add','App\Http\controllers\Homecontroller@add');
Route::post('/add','App\Http\controllers\Homecontroller@Postform');

/* addproducts start */
Route::get('/addproduct','App\Http\controllers\Homecontroller@addproduct');
Route::get('/listproduct','App\Http\controllers\Homecontroller@listproduct');

Route::post('/addproduct','App\Http\controllers\Homecontroller@productform');


/* edit product start */
Route::get('/editproduct/{id}','App\Http\controllers\Homecontroller@editproduct');
Route::post('/editproduct/{id}','App\Http\controllers\Homecontroller@updateform');

Route::get('/deleteproduct/{id}','App\Http\controllers\Homecontroller@deleteproduct');
