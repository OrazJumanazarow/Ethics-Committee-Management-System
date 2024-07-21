<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionsController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::group(['/prefix'=>'users','as'=>'users.'],function(){
    Route::resource('permissions',PermissionsController::class);
});


