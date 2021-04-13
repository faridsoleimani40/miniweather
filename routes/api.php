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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

use Illuminate\Support\Facades\Http;

Route::get('barcelona', function () {
    $response = Http::get('http://api.openweathermap.org/data/2.5/weather?q=Barcelona,spain&units=metric&APPID=c169250aeaa47aaa7d3c2f50f6da6d46');
    return $response['main']['temp'];

});

Route::get('madrid', function () {
    $response = Http::get('http://api.openweathermap.org/data/2.5/weather?q=Madrid,spain&units=metric&APPID=c169250aeaa47aaa7d3c2f50f6da6d46');
    return $response['main']['temp'];
});


Route::get('/dbfetch', 'WeatherController@show');

