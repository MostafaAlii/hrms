<?php
use Illuminate\Support\Facades\Route;
use Administrators\Http\Controllers\BackEnd;
use Administrators\Http\Controllers\FrontEnd;
/*
|--------------------------------------------------------------------------
| Administrators Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('administratorsBackend', [BackEnd\AdminstrationController::class, 'index']);
Route::get('administratorsFrontend', [FrontEnd\AdminstrationController::class, 'index']);
