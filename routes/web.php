<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Controller;

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



Route::get('/top', [Controller::class, 'top']);
Route::get('/list', [Controller::class, 'list']);
Route::get('/search', [Controller::class, 'search']);
Route::get('/data_list', [Controller::class, 'data_list']);
Route::post('/data_list', [Controller::class, 'data_list']);
Route::get('/showall', [SearchController::class, 'showall']);
Route::post('/showall', [SearchController::class, 'showall']);
Route::get('/add', [AddController::class, 'form']);
Route::post('/add', [AddController::class, 'add']);
Route::get('/edit', [UpdateController::class, 'index']);
Route::post('/edit', [UpdateController::class, 'edit_search']);
Route::get('/editor/{id}', [UpdateController::class, 'edit_page'])->name('edit.page');
Route::post('editor/update', [UpdateController::class, 'edit_update']);
Route::get('/search',[SearchController::class,'showsearch']);
Route::post('/search',[SearchController::class,'search']);
Route::get('/a', [SearchController::class, 'a']);
Route::get('/login',[LoginController::class, 'loginview']);
Route::post('/login',[LoginController::class, 'login']);
