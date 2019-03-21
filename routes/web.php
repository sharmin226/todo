<?php

Route::get('/', 'TodoController@index');
Route::post('/task', 'TodoController@store');
Route::get('/task/{id}', 'TodoController@show');
Route::get('/delete/{id}','TodoController@delete');
Route::get('/edit/{id}','TodoController@edit');
Route::post('/update/{id}','TodoController@update');
