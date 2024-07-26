<?php

use App\Http\Controllers\Forms\AplicationFormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\Forms\InformedConsntFormController;
use App\Http\Controllers\Forms\ProjectInformationController;
use App\Http\Controllers\Forms\ApplicationChecklistController;

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

Route::get('project_information_form/create',[ProjectInformationController::class, 'create']);

Route::get('application_cheklist_form/create',[ApplicationChecklistController::class, 'create']);

