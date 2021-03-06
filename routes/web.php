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
    return view('welcome',['name' => 'John']);
});

Route::get('/user/{id?}', function($id = null){
    return 'User'. $id;
});

Route::get('/home',function(){
    return 'Not allowed';
});

Route::get('/check', function(){
    return 'Allowed';
})->middleware('check.age');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
