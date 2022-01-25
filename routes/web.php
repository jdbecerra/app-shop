<?php

Route::get('/', 'TestController@welcome');  //Vista principal


/*Route::get('/prueba', function() {
	return 'Hola, ruta de prueba';
});
*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


