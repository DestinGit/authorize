<?php

return [
	'name', env_fn('APP_NAME', 'IMI TOTOT'),
	'providers'=> [
		\App\Providers\EnvironmentVariablesServiceProvider::class,
		\App\Providers\BladeServiceProvider::class,
		\App\Providers\RouteServiceProvider::class,
		\App\Providers\ErrorMiddlewareServiceProvider::class
	]
];