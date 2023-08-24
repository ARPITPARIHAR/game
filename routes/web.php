<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GetQuoteController;
use App\Http\Controllers\WebSettingController;











Route::get('/', [UserController::class, 'home']);

Route::post('quote', [GetQuoteController::class, 'store'])->name('quote');
Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
Route::get('portfoloio/create',[AdminController::class,'create'])->name('portfolio.create');

Route::get('setting/edit',[WebSettingController::class,'edit'])->name('websetting.edit');
Route::post('setting/edit',[WebSettingController::class,'update'])->name('websetting.update');