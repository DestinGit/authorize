<?php


namespace App\Support;


use Slim\App;
use Slim\Routing\RouteCollectorProxy;

class RouteGroup
{
	/**
	 * @var App
	 */
	protected $app;
	protected $prefix;
	protected $routes;
	protected $middleware = [];

	/**
	 * RouteGroup constructor.
	 * @param App $app
	 */
	public function __construct(App &$app)
	{
		$this->app = $app;
	}

	public function prefix(string $prefix): RouteGroup
	{
		$this->prefix = $prefix;
		return $this;
	}

	public function routes(string $path = ''): RouteGroup
	{
		$this->routes = $path;
		return $this;
	}

	public function middleware(array $middleware): RouteGroup
	{
		$this->middleware = $middleware;
		return $this;
	}

	public function register()
	{
		$group = $this->app->group($this->prefix, function (RouteCollectorProxy $group) {
			$app = Route::setup($group);

			require $this->routes;
		});

		array_walk($this->middleware, fn($middleware) =>$group->add(new $middleware));

		Route::setup($this->app);
	}
}