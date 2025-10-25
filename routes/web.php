<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MessagesController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Auth::routes(['register' => false]);


Route::group(['prefix'=>'/dashboard','middleware'=>'auth'],function(){
    Route::get('/',[DashboardController::class,'index']);
    Route::get('/messages',[MessagesController::class,'index']);
});