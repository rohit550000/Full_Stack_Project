<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MoviController;
use App\Http\Controllers\Api\userhomeController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/admin', [MoviController::class,'index'])->name('admin.index');
Route::get('/admin/create', [MoviController::class,'create'])->name('admin.create');

Route::post('/admin/store', [MoviController::class,'store'])->name('admin.store');
Route::get('/movi/{id}', [MoviController::class,'edit'])->name('admin.edit');

Route::put('/update/{id}', [MoviController::class,'update'])->name('admin.update');
Route::delete('/delete/{id}', [MoviController::class,'destroy'])->name('admin.delete');

Route::get('/view/{id}', [MoviController::class,'view'])->name('admin.viewmovi');



Route::get('/user/home', [userhomeController::class,'index'])->name('user.home');
Route::get('/user/showmovies/{id}', [userhomeController::class,'show'])->name('user.showmovies');


