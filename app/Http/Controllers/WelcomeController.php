<?php


namespace App\Http\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class WelcomeController
{
	public function index(Request $request, Response $response): Response
	{
		$response->getBody()->write('WelcomeController : Hello World');
		return $response;
	}

	public function show(Response $response, $name, $id): Response
	{
		$response->getBody()->write("Welcome {$name}. Your id is {$id}");
		return $response;
	}
}