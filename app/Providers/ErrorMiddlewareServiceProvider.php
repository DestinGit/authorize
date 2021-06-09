<?php


namespace App\Providers;


use Zeuxisoo\Whoops\Slim\WhoopsMiddleware;

class ErrorMiddlewareServiceProvider extends ServiceProvider
{

	public function register()
	{
		$this->app->add(new WhoopsMiddleware());
//		$this->app->addErrorMiddleware(
//			config('middleware.error_details.displayErrorsDetails'),
//			config('middleware.error_details.logErrors'),
//			config('middleware.error_details.logErrorsDetails')
//		);
	}

	public function boot()
	{

	}
}