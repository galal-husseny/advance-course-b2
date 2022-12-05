<?php

use Src\Http\Route;
use App\Controllers\HomeController;
use App\Controllers\LoginController;




Route::get('/',function(){
    echo "hello";
});

Route::get('home',[HomeController::class,'index']);

Route::post('login',[LoginController::class,'login']);

Route::get('register/{id}/{username}','App\Controllers\LoginController@register');

