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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'auth'], function () { 
  Route::resource('products', '\App\Http\Controllers\ProductController');
  Route::resource('check_two_input', '\App\Http\Controllers\CheckTwoInputController');
  Route::resource('mathematic', '\App\Http\Controllers\MathematicController');
  Route::resource('nested_loop', '\App\Http\Controllers\NestedLoopController');
  Route::resource('nested_if', '\App\Http\Controllers\NestedIfController');
});