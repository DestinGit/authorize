<?php


namespace App\Providers;


use Zeuxisoo\Whoops\Slim\WhoopsMiddleware;

class ErrorMiddlewareServiceProvider extends ServiceProvider
{

	public function register()
	{
		if (env_fn("APP_DEBUG")) {
			$this->app->add(new WhoopsMiddleware());
		}
	}

	public function boot()
	{

	}
}