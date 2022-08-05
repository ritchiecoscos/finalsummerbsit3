<?php

use App\Http\Controllers\SchoolController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[PageController::class, 'home'] );
Route::get('/mdcbuilding',[PageController::class, 'mdcbuilding'] );
Route::get('/teacher',[PageController::class, 'teacher'] );
Route::get('/contact',[PageController::class, 'contact'] );

Route::get('/school', [SchoolController::class, 'index']);
