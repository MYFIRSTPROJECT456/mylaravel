<?php

Route::get('/','MainController@index');

Route::post('/login','MainController@checkLogin');

Route::get('/logout','MainController@logout');

Route::get('/dashboard', function(){
    return view('dashboard');
});

Route::get('/addcity', function () {
    return view('addcity');
});

Route::post('/create', 'cityController@create');

Route::get('/state', function () {
    return view('addstate');
});

Route::post('/createState', 'stateController@create');

Route::get('/student', function(){
    return view('addstudent');
});

Route::post('/createStudent', 'studentController@create');
?>