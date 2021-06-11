<?php


namespace App\Http;


use Boot\Foundation\HttpKernel as Kernel;

class HttpKernel extends Kernel
{
	/**
	 * Global middleware
	 * @var array
	 */
	public $middleware = [
		middleware\ExampleAfterMiddleware::class,
		middleware\ExampleBeforeMiddleware::class
	];

	/**
	 * Route Group Middleware
	 * @var array
	 */
	public $middlewareGroups = [
		'api' => [],
		'web' => []
	];
}