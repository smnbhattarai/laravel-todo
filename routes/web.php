<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('todo/store', 'TodosController@store')->name('todo.store');
Route::get('todo/{id}/edit', 'TodosController@edit')->name('todo.edit');
Route::put('todo/{id}', 'TodosController@update')->name('todo.update');
Route::delete('todo/{id}', 'TodosController@delete')->name('todo.delete');
