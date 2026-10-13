<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ActivityController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/title', [TitleController::class, 'index']);
Route::get('/organization', [OrganizationController::class, 'index']);
Route::get('/community', [CommunityController::class, 'index']);
Route::get('/staff', [StaffController::class, 'index']);
Route::get('/activity', [ActivityController::class, 'index']);