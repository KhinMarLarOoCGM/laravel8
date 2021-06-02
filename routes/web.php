<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
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
Route::resource('companies', CompanyController::class);
Route::get('/', [CompanyController::class, 'index']);
Route::post('/store', [CompanyController::class, 'store']);
Route::get('/detail/{id}', [CompanyController::class, 'show']);
Route::get('/edit/{id}', [CompanyController::class, 'edit']);
Route::get('/search', [CompanyController::class, 'search']);
Route::get('/destroy/{id}',  [CompanyController::class, 'destroy']);