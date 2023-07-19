<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\NewController;

Route::get('/', [NewController::class, 'home']);
Route::get('/gym', [NewController::class, 'gym']);
Route::get('/groups', [NewController::class, 'groups']);
Route::get('/news', [NewController::class, 'news']);
Route::get('/contact', [NewController::class, 'contact']);
Route::get('/supplements', [NewController::class, 'supplements']);
Route::post('/add', [NewController::class, 'add']);
