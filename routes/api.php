<?php

use App\Http\Controllers\BootcampController;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(BootcampController::class)->group(function() {
    Route::get('/bootcamp',  'index' );
    Route::get('/bootcamp/{id}',  'show' );
    Route::post('/bootcamp',  'store' );
    Route::put('/bootcamp/{id}',  'update' );
    Route::delete('/bootcamp/{id}',  'destroy' );
});

