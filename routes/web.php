<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserManegementController;
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


//トップ画面
Route::get('/top', [Controller::class, 'top']);
Route::get('/list', [Controller::class, 'list']);
Route::get('/search', [Controller::class, 'search']);
Route::get('/data_list', [Controller::class, 'data_list']);
Route::post('/data_list', [Controller::class, 'data_list']);

//検索画面
Route::get('/showall', [SearchController::class, 'showall']);
Route::post('/showall', [SearchController::class, 'showall']);
Route::get('/search',[SearchController::class,'showsearch']);
Route::post('/search',[SearchController::class,'search']);
Route::get('/a', [SearchController::class, 'a']);

//追加用
Route::get('/add', [AddController::class, 'form']);
Route::post('/add', [AddController::class, 'add']);

//更新削除
Route::get('/edit', [UpdateController::class, 'index']);
Route::post('/edit', [UpdateController::class, 'edit_search']);
Route::get('/editor/{id}', [UpdateController::class, 'edit_page'])->name('edit.page');
Route::get('/delete/{id}', [DeleteController::class, 'destroy'])->name('delete.page');
Route::post('editor/update', [UpdateController::class, 'edit_update']);

//管理画面トップ
Route::get('manegement_top', [UserManegementController::class, 'manegement_top']);

//ログイン処理
Route::get('/login',[LoginController::class, 'loginview']);
Route::post('/login',[LoginController::class, 'login']);
