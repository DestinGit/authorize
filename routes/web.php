<?php

use App\Support\Route;
//$app = Route::$app;
//$app->get('/home', function (\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Message\ResponseInterface $response) {
//	$name="Mopoa Tino";
//	return view($response, 'auth.home', compact('name'));
//});

Route::get('/{name}', 'WelcomeController@index');
Route::get('/welcome/{name}/{id}', 'WelcomeController@show');
