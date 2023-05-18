<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\VoitureController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Environment\Environment;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//categories
Route::post('category/store',[CategorieController::class,'store']);
Route::get('categories',[CategorieController::class,'index']);
Route::delete('category/delete/{id}',[CategorieController::class,'destroy']);
Route::get('category/show/{id}',[CategorieController::class,'show']);
Route::put('category/update/{id}',[CategorieController::class,'update']);
//voiture
Route::post('voiture/store',[VoitureController::class,'store']);
Route::get('voiture',[VoitureController::class,'index']);
Route::put('voiture/update/{id}',[VoitureController::class,'update']);
Route::delete('voiture/delete/{id}',[VoitureController::class,'destroy']);
Route::get('voiture/show/{id}',[VoitureController::class,'show']);





