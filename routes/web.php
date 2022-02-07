<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
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

Route::get('/', function () {
    return view('welcome');
});
// routes of category
Route::get('/catgory',[CategoryController::class ,'list']);
Route::get('/create',[CategoryController::class ,'create']);
Route::post('/save',[CategoryController::class ,'save']);
Route::delete('/delete/{id}',[CategoryController::class ,'delete']);
Route::get('/catgorydetails/{id}',[CategoryController::class ,'show']);
Route::get('/edit/{id}',[CategoryController::class ,'edit_data']);
Route::post('/edit',[CategoryController::class ,'edit']);

// routes of articles
Route::get('/art',[ArticleController::class ,'listArticle']);
Route::get('/artcreate',[ArticleController::class ,'artcreate']);
Route::post('/save',[ArticleController::class ,'save']);
Route::delete('delete/{id}',[ArticleController::class ,'delete']);
Route::get('/articledetails/{id}',[ArticleController::class ,'show']);
Route::get('/edit/{id}',[ArticleController::class ,'edit_data']);
Route::post('/edit',[ArticleController::class ,'edit']);