<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todolistcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[todolistcontroller::class,'index']);
Route::get('delete/{id}',[todolistcontroller::class,'delete']);
Route::get('edit/{id}',[todolistcontroller::class,'edit']);

Route::post('/save-todo',[todolistcontroller::class,'saveTodo'])->name('saveTodo');
Route::post('/edit',[todolistcontroller::class,'updateTodo'])->name('updateTodo');
