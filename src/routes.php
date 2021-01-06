<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'yamashirotest\hogeyamatest\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'yamashirotest\hogeyamatest\CalculatorController@subtract');