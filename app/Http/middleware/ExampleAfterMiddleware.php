<?php


namespace App\Http\middleware;


use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as Handle;

class ExampleAfterMiddleware
{
	public function __invoke(Request $request, Handle $handle): \Psr\Http\Message\ResponseInterface
	{
		$response = $handle->handle($request);

		$response->getBody()->write("\n After Middleware");

		return $response;
	}
}