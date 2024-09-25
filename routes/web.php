<?php

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

Route::get('/', "RoutesController@welcome"
)->name('welcome');

Route::get('/about', "RoutesController@about"
)->name('about');

Route::get('/ifdemo', "RoutesController@ifDemo"
)->name('ifdemo');

Route::get('/loopdemo', "RoutesController@loopDemo"
)->name('loopdemo');

Route::get('/switchdemo', "RoutesController@switchDemo"
)->name('switchdemo');

Route::get('/CorrectAnswer', "RoutesController@correct"
)->name('correct');

Route::get('/WrongAnswer', "RoutesController@wrong"
)->name('wrong');

Route::get('/answer/{res}', SingleDemoController::class
)->name('answer');