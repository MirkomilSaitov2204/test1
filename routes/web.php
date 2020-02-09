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

Route::group(['prefix' => '/admin' ], function () {

Route::get('/', 'CategoriesController@index')->middleware('auth');
Route::resource('categories', 'CategoriesController')->middleware('auth');

Route::resource('questions', 'QuestionController')->middleware('auth');

Route::resource('answers', 'AnswerController')->middleware('auth');

});

Auth::routes();


Route::get('/', 'ClientsController@index')->name('home');
Route::get('/home', 'ClientsController@index')->name('home');

Route::get('/about', 'ClientsController@about')->name('about');

Route::get('/question', 'ClientsController@question')->name('question');


Route::post('/question/store', 'ClientsController@questionStore')->name('question.store');
