<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Employee Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('employee', function () {
    return 'Employee Loaded Route Successfully';
});
