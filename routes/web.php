<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\AuthorElement;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});


/*Route::post('/login',[AuthController::class,'login']);
Route::post('/register',[AuthController::class,'register']);


Route::controller(AuthController::class)->group(function () {
    Route::post('/login','login');
    Route::post('/register','register');
});

Route::group(attributes:["middleware"=>"auth:sanctum"],routes:function(){
    Route::post('/login',[AuthController::class,'login']);
    Route::post('/register',[AuthController::class,'register']);
});


Route::controller(AuthController::class)->group(function () {
    Route::get('/userrr/aaa', 'index');
});*/

Route::post('loginn',[AuthController::class,'login']);
Route::post('registe',[AuthController::class,'register']);
Route::get('/u', function () {
    return User::all();
});
