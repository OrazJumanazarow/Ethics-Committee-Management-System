<?php

use App\Http\Controllers\Forms\AplicationFormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\Forms\InformedConsntFormController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::group(['/prefix'=>'users','as'=>'users.'],function(){
    Route::resource('permissions',PermissionsController::class);
});

Route::get('application_form/create', [AplicationFormController::class,'create']);

Route::get('informed_form/create',[InformedConsntFormController::class, 'create']);
