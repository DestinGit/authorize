<?php

use App\Http\HttpKernel;
use DI\Container;
use DI\Bridge\Slim\Bridge as App;

$app = App::create(new Container());
return HttpKernel::bootstrap( $app )->getApplication();
//$_SERVER['app'] = &$app;
//if (!function_exists('app'))
//{
//	function app()
//	{
//		return $_SERVER['app'];
//	}
//}

