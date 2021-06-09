<?php
use DI\Container;
use DI\Bridge\Slim\Bridge as SlimAppFactory;

$app = SlimAppFactory::create(new Container());
//$_SERVER['app'] = &$app;
//if (!function_exists('app'))
//{
//	function app()
//	{
//		return $_SERVER['app'];
//	}
//}

$middleware = require __DIR__ . '/../app/middleware.php';
$middleware($app);

(require __DIR__ . '/../app/routes.php')($app);

return $app;