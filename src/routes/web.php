<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AdminController;

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

Route::get('/register/step1',[AuthorController::class,'register']);
Route::post('register/step1',[AuthorController::class,'step1']);
Route::get('/register/step2',[AuthorController::class,'register2']);
Route::post('/register/step2',[AdminController::class,'create']);
Route::post('/weight_logs',[AdminController::class,'logs']);
Route::get('/wight_logs/goal_setting',[AdminController::class,'edit']);
Route::post('/wight_logs/goal_setting',[AdminController::class,'update']);
Route::get('/log',[AdminController::class,'log']);


Route::middleware('auth')->group(function () {
    Route::get('/weight_logs', [AdminController::class, 'top']);
    Route::get('/',[AdminController::class, 'top']);
    });