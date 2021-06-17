<?php


namespace Boot\Foundation;


use Boot\Foundation\Bootstrappers\LoadAliases;
use Boot\Foundation\Bootstrappers\LoadEnvironmentVariables;
use Boot\Foundation\Bootstrappers\LoadHttpMiddleware;
use Boot\Foundation\Bootstrappers\LoadServiceProviders;

class HttpKernel extends Kernel
{
	/**
	 * Global middleware
	 * @var array
	 */
	public $middleware = [];

	/**
	 * Route Group Middleware
	 * @var array
	 */
	public $middlewareGroups = [
		'api' => [],
		'web' => []
	];

	/**
	 * @var array
	 */
	public $bootstrap = [
		Bootstrappers\LoadEnvironmentVariables::class,
		Bootstrappers\LoadDebuggingPage::class,
		Bootstrappers\LoadAliases::class,
		Bootstrappers\LoadHttpMiddleware::class,
		Bootstrappers\LoadServiceProviders::class
	];
}
