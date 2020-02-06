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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/content','ApiController@store');

Route::get('/content','ApiController@show');

Route::get('/content/{id}','ApiController@getcontentbyid');

Route::put('/updatecontent/{id}','ApiController@update');

Route::delete('/deletecontent/{id}','ApiController@delete');
