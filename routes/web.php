<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopListController;

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

Route::get('/', [ShopListController::class,'index']);

Route::post('/save-List',[ShopListController::class,'saveList'])->name('saveList');

Route::get('/edit/{id}',[ShopListController::class,'edit']);

Route::post('/edit',[ShopListController::class,'updateList'])->name('updateList');

Route::get('/delete/{id}',[ShopListController::class,'deleteList']);
