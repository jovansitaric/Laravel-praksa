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

// Route::post('/register', 'AuthController@register');

    
Route::get('login', function () {
    $array = [
        "name" => "djura",
        "description" => "sta god uradio"
    ];

    return $array;
});
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');
Route::group(['middleware' => 'auth:api'], function() {
    Route::get('details', 'API\UserController@details');
});
Route::namespace('Api')->middleware('auth:api')->group(function () {
    Route::apiResources([
            'tasks' => 'TaskController',
            'tasks/{task}/notes' => 'NoteController'
        ]);
});