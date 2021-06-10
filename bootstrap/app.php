<?php
use DI\Container;
use DI\Bridge\Slim\Bridge as SlimAppFactory;
use App\Providers\ServiceProvider;

$app = SlimAppFactory::create(new Container());
//$_SERVER['app'] = &$app;
//if (!function_exists('app'))
//{
//	function app()
//	{
//		return $_SERVER['app'];
//	}
//}

ServiceProvider::setup($app, config('app.providers'));

return $app;