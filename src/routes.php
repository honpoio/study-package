<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'yamashirotest\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'yamashirotest\CalculatorController@subtract');