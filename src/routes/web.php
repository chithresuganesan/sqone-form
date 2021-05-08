<?php
Route::namespace('Sqone\Form\Http\Controllers')->group(function(){

Route::get('/index', 'ContactController@index')->name('index');
Route::get('/contact', 'ContactController@form')->name('contact');
Route::get('/show', 'ContactController@show')->name('show');
Route::post('/store', 'ContactController@store')->name('store');
});

?>
