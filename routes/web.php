<?php

use App\Http\Controllers\MenusController;
use Illuminate\Support\Facades\Route;

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

Route::get('/menus', [MenusController::class,'index']);
Route::get('/menus/create', [MenusController::class,'create']);
Route::post('/menus', [MenusController::class,'store']);
Route::get('/menus/{id}/edit', [MenusController::class,'edit']);
Route::put('/menus/{id}' , [MenusController::class,'update']);
Route::delete('/menus/{id}' , [MenusController::class,'destroy']);
