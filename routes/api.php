<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(attributes:["middleware"=>"auth:sanctum"],routes:function(){
    Route::post('loginn',[AuthController::class,'login']);
    Route::post('registe',[AuthController::class,'register']);
});
