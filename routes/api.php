<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VacationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request)
{
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthenticationController::class, 'authenticate']);
Route::post('/logout', [AuthenticationController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/user/index', [UserController::class, 'index']);

//Vacations Routes
Route::group(['prefix' => 'vacation', 'controller' => VacationController::class, 'middleware' => 'auth:sanctum'], function ()
{
    Route::get('/', 'index');
    Route::post('new', 'store');
    Route::post('balance/new', 'createBalance');
    Route::post('cancel/{id}', 'cancel');
    Route::get("{id}", "show");
    Route::put("{vacation_id}/update-status", "statusUpdate");
});
