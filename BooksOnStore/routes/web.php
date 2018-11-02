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

Route::get('/insertForm', function () {
    return view('insertForm');
});
Route::get('/booksCategory', function () {
    return view('booksCategory');
});

 Route::get('/registration', function () {
    return view('registration');
});

 Route::get('/login', function () {
    return view('login');
});

 Route::get('/selectdata', function () {
    return view('selectdata');
});
 Route::get('/edit', function () {
    return view('edit');
});
Route::get('/loginAPI', function () {
    return view('loginAPI');
});
Route::post('/submit', 'Controller@submit');

Route::post('/insert', 'BooksCategory@insert');

Route::post('/insert', 'registration@insert');
Route::get('/selectdata', 'selectdata@index');
Route::get('edit/{id}','edit@show');
Route::post('edit/{id}','edit@edit');

Route::get('/submit', 'Controller@getdata');
Route::get('delete/{id}','delete@destroy');
Route::post('/login', 'login@login');

Route::post('/api', 'loginAPI@api');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
