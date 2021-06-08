<?php

use Slim\App;
use App\Http\Controllers\WelcomeController;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

return function (App $app) {

	$app->get('/home', function (Request $request, Response $response, $params) {
		$name = "Clean Code Studio";
		return view($response, 'auth.home', compact('name'));
	});

	$app->get('/', [WelcomeController::class, 'index']);
	$app->get('/{name}/{id}', [WelcomeController::class, 'show']);
};
