<?php

use App\Http\Controllers\Zoom\MeetingController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// AVOIR LA LISTE DES MEETINGS
Route::get('/meetings', [MeetingController::class ,'list']);

Route::post('/meetings', [MeetingController::class ,'create']);

Route::get('/meetings/{id}', [MeetingController::class ,'get'])->where('id', '[0-9]+');
Route::patch('/meetings/{id}', [MeetingController::class ,'update'])->where('id', '[0-9]+');
Route::delete('/meetings/{id}', [MeetingController::class ,'delete'])->where('id', '[0-9]+');
