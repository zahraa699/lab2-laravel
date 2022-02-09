<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RelationController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// routes of category
Route::get('/catgory',[CategoryController::class ,'list'])->middleware(['auth']);
Route::get('/create',[CategoryController::class ,'create'])->middleware(['auth','is_admin','date_of_birth']);
Route::post('/cateory/save',[CategoryController::class ,'save'])->name('category.save');
Route::delete('/deletes/{id}',[CategoryController::class ,'delete']);
Route::get('/catgorydetails/{id}',[CategoryController::class ,'show'])->name('category.show');
Route::get('/edits/{id}',[CategoryController::class ,'edit']);
Route::put('/updates/{id}',[CategoryController::class ,'updates'])->name('category.update');

// routes of articles
Route::get('/art',[ArticleController::class ,'listArticle']);
Route::get('/artcreate',[ArticleController::class ,'artcreate']);
Route::post('/article/save',[ArticleController::class ,'save'])->name('article.save');;
Route::delete('delete/{id}',[ArticleController::class ,'delete']);
Route::get('/articledetails/{id}',[ArticleController::class ,'show']);
Route::get('/edit/{id}',[ArticleController::class ,'edit_data']);
Route::post('/edit',[ArticleController::class ,'edit'])->name('article.update');
