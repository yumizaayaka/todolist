<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Models\Todo;

Route::get('/',[TodoController::class,'index'])->name('todo.index');
Route::get('/todo/create',[TodoController::class,'create'])->name('todo.create');
Route::post('/todo/create',[TodoController::class,'create'])->name('todo.create');
Route::get('/todo/update',[TodoController::class,'update'])->name('todo.update');
Route::post('/todo/update',[TodoController::class,'update'])->name('todo.update');
Route::get('/todo/delete',[TodoController::class,'delete'])->name('todo.delete');
Route::post('/todo/delete',[TodoController::class,'delete'])->name('todo.delete');

