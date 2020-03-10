<?php

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

Route::get('/barcodes','Barcode@barcode');

Route::get('/insert','InsertStu@viewInsertPage');

Route::get('/count','InsertStu@counts');

Route::post('/insert','InsertStu@InsertStu')->name('insert');

Route::get('/change','InsertStu@changeSchoolName');
Route::get('/index','HomeController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/BFS','Puzzle@BFS');

Route::get('/DFS','Puzzle@DFS');

Route::get('/Astar','InsertStu@Astar');

Route::get('/inputFialed','Barcode@show01');
Route::post('/inputFialed','Barcode@inputFialed')->name('inputFialed');
