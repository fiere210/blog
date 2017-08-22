<?php

Route::get('/', function () {

	$name = "Francisco";

  return view('welcome', compact("name"));
});

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('about', function () {
    return view('about');
});


