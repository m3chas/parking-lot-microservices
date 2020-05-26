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

// Get vehicle type.
$router->post('/type', 'VehicleController@getType');

// Create a new vehicle on the system.
$router->post('/create', 'VehicleController@create');

// Update minutes counter on vehicle.
$router->post('/minutes', 'VehicleController@updateMinutes');