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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('contacts', 'ContactsController@index');
Route::get('contacts/{id}', 'ContactsController@show');
Route::delete('contacts/{id}', 'ContactsController@destroy');
Route::post('contacts', 'ContactsController@store');
Route::put('contacts/{id}', 'ContactsController@update');

// Route::resource('contacts', 'ContactsController');
// Route::resource('contacts', App\Http\Controllers\ContactsController::class);

// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
// header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');