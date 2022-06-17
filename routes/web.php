<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\UpdateController;

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
Route::get('/showall', [SearchController::class, 'showall']);
Route::post('/showall', [SearchController::class, 'showall']);
Route::get('/add', [AddController::class, 'form']);
Route::post('/add', [AddController::class, 'add']);

//更新
Route::get('/edit', [UpdateController::class, 'index']);
Route::post('/edit', [UpdateController::class, 'edit_search']);
