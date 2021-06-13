<?php

use App\Http\HttpKernel;
use DI\Container;
use DI\Bridge\Slim\Bridge as App;

//$app = App::create(new Container());
return HttpKernel::bootstrap( App::create(new Container()) )->getApplication();
//$_SERVER['app'] = &$app;
//if (!function_exists('app'))
//{
//	function app()
//	{
//		return $_SERVER['app'];
//	}
//}

