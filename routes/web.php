<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Auth::routes(['register' => false]);


Route::group(['prefix'=>'/dashboard','middleware'=>'auth'],function(){
    Route::get('/',[DashboardController::class,'index']);
});