<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\User;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/*Route::group(["middleware"=>"auth:sanctum"],function(){
    Route::post('loginn',[AuthController::class,'login']);
    Route::post('registe',[AuthController::class,'register']);
});*/

//["middleware"=>"auth:sanctum"],


Route::post('loginn', [AuthController::class, 'login']);
Route::post('registe', [AuthController::class, 'register']);
Route::get('index', [AuthController::class, 'index']);

Route::get('/u', function () {
    return User::all();
});
