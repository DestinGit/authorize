<?php


namespace App\Providers;


use App\Support\Route;
use App\Support\RouteGroup;

class RouteServiceProvider extends ServiceProvider
{

	public function register()
	{
		Route::setup($this->app);

		$this->bind(RouteGroup::class, fn() => new RouteGroup($this->app));
	}

	public function boot()
	{
		$this->apiRouteGroup()->register();
		$this->webRouteGroup()->register();
	}

	public function webRouteGroup(): RouteGroup
	{
		$get = routes_path('web.php');
		$add = $this->resolve('middleware');
		/**
		 * @var RouteGroup $web
		 */
		$web = $this->resolve(RouteGroup::class);

		return $web->routes($get)->prefix('')->middleware([
			...$add['web'],
			...$add['global']
		]);
	}

	public function apiRouteGroup(): RouteGroup
	{
		$get = routes_path('api.php');
		$add = $this->resolve('middleware');
		/**
		 * @var RouteGroup $api
		 */
		$api = $this->resolve(RouteGroup::class);

		return $api->routes($get)->prefix('/api')->middleware([
			...$add['api'],
			...$add['global']
		]);
	}
}