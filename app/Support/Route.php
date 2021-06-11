<?php


namespace App\Support;

use Illuminate\Support\Str;
use Slim\App;

class Route
{
	/**
	 * @var App
	 */
	public static $app;

	public static function setup(App &$app): App
	{
		self::$app = $app;
		return $app;
	}

	public static function __callStatic($verb, $parameters)
	{
		$app = self::$app;

		[$route, $action] = $parameters;
		self::validation($route, $verb, $action);

		$action = is_callable($action)
			? $action
			: self::resolveViaController($action);
		return $app->$verb($route, $action);

	}

	protected static function validation($route, $verb, $action)
	{
		$exception = "Unresolvable Route Callback/Controller action";
		$context = json_encode(compact($route, $verb, $action));
		$fails = !((is_callable($action)) or (is_string($action) and Str::is("*@*", $action)));

		throw_when($fails, $exception . $context);
	}

	protected static function resolveViaController($action): array
	{
		$class = Str::before($action, "@");
		$method = Str::after($action, "@");
		$controller = config('routing.controllers.namespace') . $class;

		return [$controller, $method];
	}

}