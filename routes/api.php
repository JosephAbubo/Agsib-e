<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use\Illuminate\View\Middleware\ShareErrorsFromSession::class;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/token', function () {

    return App\Models\User::find(7)->createToken('test')->plainTextToken;

});

Route::middleware('auth:sanctum')->group( function () {

    Route::apiResources([
        // admin
        '/users'=>\App\Http\Controllers\CreateAdminController::class,
        '/resident'=>\App\Http\Controllers\CreateResidentController::class,
    ]);
    
});