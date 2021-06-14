<?php

namespace App\Http\Controllers;


use Psr\Http\Message\ResponseInterface;

class ApiController
{
	public function index(ResponseInterface $response): ResponseInterface
	{
		$response->getBody()->write(json_encode([
			'hello'=>'World'
		], JSON_PRETTY_PRINT));

		return $response;
	}
}