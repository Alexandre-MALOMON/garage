<?php

use App\Http\Controllers\AnneeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\ModelController;
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

//year
Route::post('year/store',[AnneeController::class,'store']);
Route::get('years',[AnneeController::class,'index']);
Route::delete('year/delete/{id}',[AnneeController::class,'destroy']);
Route::get('year/show/{id}',[AnneeController::class,'show']);
Route::put('year/update/{id}',[AnneeController::class,'update']);

//marque
Route::post('marque/store',[MarqueController::class,'store']);
Route::get('marques',[MarqueController::class,'index']);
Route::delete('marque/delete/{id}',[MarqueController::class,'destroy']);
Route::get('marque/show/{id}',[MarqueController::class,'show']);
Route::put('marque/update/{id}',[MarqueController::class,'update']);

//model
Route::post('model/store',[ModelController::class,'store']);
Route::get('models',[ModelController::class,'index']);
Route::delete('model/delete/{id}',[ModelController::class,'destroy']);
Route::get('model/show/{id}',[ModelController::class,'show']);
Route::put('model/update/{id}',[ModelController::class,'update']);


//voiture
Route::post('voiture/store',[VoitureController::class,'store']);
Route::get('voiture',[VoitureController::class,'index']);
Route::put('voiture/update/{id}',[VoitureController::class,'update']);
Route::delete('voiture/delete/{id}',[VoitureController::class,'destroy']);
Route::get('voiture/show/{id}',[VoitureController::class,'show']);





