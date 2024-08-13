<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard',[DashboardController::class,'index']);
Route::get('/profile',[ProfileController::class,"index"]);
Route::get('/registration',[registerController::class,'index']);
Route::get('/terms',function(){
    
    return view('terms');

});