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

Route::get('products', 'ProductsController@getProducts');// Get all products
Route::get('details/{id}', 'DetailsController@getDetails'); //Get specific row from details table
Route::delete('details/{id}/{productId}/{name}', 'DetailsController@deleteDetail'); //Delete row
Route::post('newRecord', 'RecordsController@newRecord'); //add new record to the details table
Route::post('newProduct', 'RecordsController@addNewProduct'); //add new product
Route::post('updateDetail', 'DetailsController@updateDetail');// update specific row
//Route::get('listings/{id}', 'ReportController@getListings'); // get all the listings
Route::get('listings', 'ReportController@getListings');
Route::get('details', 'ReportController@getAllDetails'); // get all the data from the details table


