<?php

/*
 |--------------------------------------------------------------------------
 | Client Routes
 |--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/home', 'HomeController@index');
Route::get('/about', 'AboutController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/foradvisors', 'ForadvisorsController@index');
Route::get('/psychics', 'PsychicsController@index');
Route::get('/faq', 'FaqController@index');
Route::get('/blog', 'BlogController@index');



Route::get('/api/v1/users/{id?}', 'users@index');
Route::post('/register', 'users@store');
Route::post('/advisor_list', 'users@advisorlist');
Route::post('/api/v1/users/{id}', 'users@update');
Route::delete('/api/v1/users/{id}', 'users@destroy');
