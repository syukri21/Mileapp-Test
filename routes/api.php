<?php

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

Route::middleware('auth:api')->group(function () {

});

Route::prefix('v1')->group(function () {
    Route::get("package", 'PackageController@index');
    Route::get("package/{id}", 'PackageController@get');
    Route::post("package", 'PackageController@store');
    Route::put("package/{id}", 'PackageController@update');
    Route::delete("package/{id}", 'PackageController@remove');
    Route::patch("package/{id}", 'PackageController@updatePatch');
});
