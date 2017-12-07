<?php

Route::get('test', function(){
	echo "HOLA!";
});

Route::get('suma/{a}/{b}', 'danilo\prueba\PruebaController@suma');
Route::get('resta/{a}/{b}', 'danilo\prueba\PruebaController@resta');