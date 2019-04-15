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
// Fallback route incase anything goes wrong
Route::fallback(function(){
    return response()->json(['error' => 'Resource not found.'], 404);
})->name('fallback');
Route::resource('device-info','DetectionInfoController');
