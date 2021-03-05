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
Route::middleware('laravel.passport.client')->get('/client1', function (Request $request) {
    return $request->user();
});
Route::middleware('laravel.passport.client')->get('/client2', function (Request $request) {
    return response('auth client for laravel passport');
});

Route::middleware('laravel.passport.client')->get('/users/{userId}', function (Request $request, int $userId) {
    return response('use id = '.$userId);
});

