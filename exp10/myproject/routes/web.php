<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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






















Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth','admin']], function(){

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

//Route::get('/role-register',[App\Http\Controllers\Admin\DashboardController::class,'registered']);
Route::get('/role-register','App\Http\Controllers\Admin\DashboardController@registered');

Route::get('/role-edit/{id}','App\Http\Controllers\Admin\DashboardController@registeredit');

Route::put('/role-register-update/{id}','App\Http\Controllers\Admin\DashboardController@registerupdate');

Route::delete('/role-delete/{id}','App\Http\Controllers\Admin\DashboardController@registerdelete');


Route::get('/news','App\Http\Controllers\Admin\NewsController@index');

Route::post('/save-news','App\Http\Controllers\Admin\NewsController@store');

Route::get('/news/{id}','App\Http\Controllers\Admin\NewsController@edit');

Route::put('/news-update/{id}','App\Http\Controllers\Admin\NewsController@update');

Route::delete('/news-delete/{id}','App\Http\Controllers\Admin\NewsController@delete');



Route::get('/books','App\Http\Controllers\Admin\BooksController@bookindex');

Route::post('/save-books','App\Http\Controllers\Admin\BooksController@bookstore');

Route::get('/books/{id}','App\Http\Controllers\Admin\BooksController@bookedit');

Route::put('/books-update/{id}','App\Http\Controllers\Admin\BooksController@bookupdate');

Route::delete('/books-delete/{id}','App\Http\Controllers\Admin\BooksController@bookdelete');

});
