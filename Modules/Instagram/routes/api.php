<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Instagram\app\Http\Controllers\InstagramController;

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

Route::middleware(['auth:sanctum'])->prefix('v1')->name('api.')->group(function () {
    Route::get('instagram', fn (Request $request) => $request->user())->name('instagram');
});

Route::post('/{slug}', [InstagramController::class , 'search']);
Route::get('/data', [InstagramController::class , 'getData']);
